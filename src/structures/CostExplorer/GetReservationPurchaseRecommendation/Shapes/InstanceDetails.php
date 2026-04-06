<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EC2InstanceDetails|null $EC2InstanceDetails
 * @property RDSInstanceDetails|null $RDSInstanceDetails
 * @property RedshiftInstanceDetails|null $RedshiftInstanceDetails
 * @property ElastiCacheInstanceDetails|null $ElastiCacheInstanceDetails
 * @property ESInstanceDetails|null $ESInstanceDetails
 * @property MemoryDBInstanceDetails|null $MemoryDBInstanceDetails
 */
class InstanceDetails extends Shape
{
    /**
     * @param array{
     *     EC2InstanceDetails?: EC2InstanceDetails|null,
     *     RDSInstanceDetails?: RDSInstanceDetails|null,
     *     RedshiftInstanceDetails?: RedshiftInstanceDetails|null,
     *     ElastiCacheInstanceDetails?: ElastiCacheInstanceDetails|null,
     *     ESInstanceDetails?: ESInstanceDetails|null,
     *     MemoryDBInstanceDetails?: MemoryDBInstanceDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
