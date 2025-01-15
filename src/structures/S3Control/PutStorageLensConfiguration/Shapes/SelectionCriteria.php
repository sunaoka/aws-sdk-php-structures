<?php

namespace Sunaoka\Aws\Structures\S3Control\PutStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Delimiter
 * @property int<1, 10>|null $MaxDepth
 * @property double|null $MinStorageBytesPercentage
 */
class SelectionCriteria extends Shape
{
    /**
     * @param array{
     *     Delimiter?: string|null,
     *     MaxDepth?: int<1, 10>|null,
     *     MinStorageBytesPercentage?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
