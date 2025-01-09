<?php

namespace Sunaoka\Aws\Structures\XRay\ListRetrievedTraces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property double $Duration
 * @property list<Span> $Spans
 */
class RetrievedTrace extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Duration?: double,
     *     Spans?: list<Span>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
