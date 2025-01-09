<?php

namespace Sunaoka\Aws\Structures\Rds\PurchaseReservedDBInstancesOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedDBInstancesOfferingId
 * @property string $ReservedDBInstanceId
 * @property int $DBInstanceCount
 * @property list<Shapes\Tag> $Tags
 */
class PurchaseReservedDBInstancesOfferingRequest extends Request
{
    /**
     * @param array{
     *     ReservedDBInstancesOfferingId: string,
     *     ReservedDBInstanceId?: string,
     *     DBInstanceCount?: int,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
