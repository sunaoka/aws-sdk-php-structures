<?php

namespace Sunaoka\Aws\Structures\S3Control\PutStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Delimiter
 * @property int $MaxDepth
 * @property double $MinStorageBytesPercentage
 */
class SelectionCriteria extends Shape
{
    /**
     * @param array{
     *     Delimiter?: string,
     *     MaxDepth?: int,
     *     MinStorageBytesPercentage?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
