<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateDataTablePrimaryValues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $DataTableId
 * @property list<Shapes\PrimaryValue> $PrimaryValues
 * @property list<Shapes\PrimaryValue> $NewPrimaryValues
 * @property Shapes\DataTableLockVersion $LockVersion
 */
class UpdateDataTablePrimaryValuesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     DataTableId: string,
     *     PrimaryValues: list<Shapes\PrimaryValue>,
     *     NewPrimaryValues: list<Shapes\PrimaryValue>,
     *     LockVersion: Shapes\DataTableLockVersion
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
