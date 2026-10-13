<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceName
 * @property int<-40, 0>|null $AudioReferenceLevel
 */
class NdiSourceSettings extends Shape
{
    /**
     * @param array{
     *     SourceName?: string|null,
     *     AudioReferenceLevel?: int<-40, 0>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
