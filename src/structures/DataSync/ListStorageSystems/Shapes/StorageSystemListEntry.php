<?php

namespace Sunaoka\Aws\Structures\DataSync\ListStorageSystems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StorageSystemArn
 * @property string $Name
 */
class StorageSystemListEntry extends Shape
{
    /**
     * @param array{
     *     StorageSystemArn?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
