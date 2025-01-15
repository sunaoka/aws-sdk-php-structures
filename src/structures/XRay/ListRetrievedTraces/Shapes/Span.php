<?php

namespace Sunaoka\Aws\Structures\XRay\ListRetrievedTraces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Document
 */
class Span extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Document?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
