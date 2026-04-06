<?php

namespace Sunaoka\Aws\Structures\XRay\ListRetrievedTraces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property double|null $Duration
 * @property list<Span>|null $Spans
 */
class RetrievedTrace extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Duration?: double|null,
     *     Spans?: list<Span>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
