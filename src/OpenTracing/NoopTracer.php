<?php

namespace OpenTracing;

use OpenTracing\Propagation\Reader;
use OpenTracing\Propagation\Writer;

final class NoopTracer implements Tracer
{
    public static function create()
    {
        return new self();
    }

    /**
     * {@inheritdoc}
     */
    public function startSpan($operationName, $options = [])
    {
        return NoopSpan::create();
    }

    /**
     * {@inheritdoc}
     */
    public function inject(SpanContext $spanContext, $format, Writer $carrier)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function extract($format, Reader $carrier)
    {
        return NoopSpanContext::create();
    }

    /**
     * {@inheritdoc}
     */
    public function flush()
    {
    }
}
