<?php

namespace Sunaoka\Aws\Structures\Rds\PurchaseReservedDBInstancesOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedDBInstancesOfferingId
 * @property string|null $ReservedDBInstanceId
 * @property int|null $DBInstanceCount
 * @property list<Shapes\Tag>|null $Tags
 */
class PurchaseReservedDBInstancesOfferingRequest extends Request
{
    /**
     * @param array{
     *     ReservedDBInstancesOfferingId: string,
     *     ReservedDBInstanceId?: string|null,
     *     DBInstanceCount?: int|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
