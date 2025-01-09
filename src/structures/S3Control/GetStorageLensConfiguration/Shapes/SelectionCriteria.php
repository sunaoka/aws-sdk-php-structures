<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Delimiter
 * @property int<1, 10> $MaxDepth
 * @property double $MinStorageBytesPercentage
 */
class SelectionCriteria extends Shape
{
    /**
     * @param array{
     *     Delimiter?: string,
     *     MaxDepth?: int<1, 10>,
     *     MinStorageBytesPercentage?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
