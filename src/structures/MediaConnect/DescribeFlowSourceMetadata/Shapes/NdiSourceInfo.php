<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlowSourceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceName
 */
class NdiSourceInfo extends Shape
{
    /**
     * @param array{SourceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
