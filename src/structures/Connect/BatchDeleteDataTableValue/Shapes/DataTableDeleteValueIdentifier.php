<?php

namespace Sunaoka\Aws\Structures\Connect\BatchDeleteDataTableValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PrimaryValue>|null $PrimaryValues
 * @property string $AttributeName
 * @property DataTableLockVersion $LockVersion
 */
class DataTableDeleteValueIdentifier extends Shape
{
    /**
     * @param array{
     *     PrimaryValues?: list<PrimaryValue>|null,
     *     AttributeName: string,
     *     LockVersion: DataTableLockVersion
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
