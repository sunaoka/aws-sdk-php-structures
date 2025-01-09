<?php

namespace Sunaoka\Aws\Structures\XRay\ListRetrievedTraces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Document
 */
class Span extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Document?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
