<?php

namespace Sunaoka\Aws\Structures\DataSync\ListStorageSystems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StorageSystemArn
 * @property string|null $Name
 */
class StorageSystemListEntry extends Shape
{
    /**
     * @param array{
     *     StorageSystemArn?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
