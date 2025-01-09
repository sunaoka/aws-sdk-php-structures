<?php

namespace Sunaoka\Aws\Structures\S3Control\UpdateStorageLensGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property StorageLensGroupFilter $Filter
 * @property string $StorageLensGroupArn
 */
class StorageLensGroup extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Filter: StorageLensGroupFilter,
     *     StorageLensGroupArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
