<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EC2InstanceDetails $EC2InstanceDetails
 * @property RDSInstanceDetails $RDSInstanceDetails
 * @property RedshiftInstanceDetails $RedshiftInstanceDetails
 * @property ElastiCacheInstanceDetails $ElastiCacheInstanceDetails
 * @property ESInstanceDetails $ESInstanceDetails
 * @property MemoryDBInstanceDetails $MemoryDBInstanceDetails
 */
class InstanceDetails extends Shape
{
    /**
     * @param array{
     *     EC2InstanceDetails?: EC2InstanceDetails,
     *     RDSInstanceDetails?: RDSInstanceDetails,
     *     RedshiftInstanceDetails?: RedshiftInstanceDetails,
     *     ElastiCacheInstanceDetails?: ElastiCacheInstanceDetails,
     *     ESInstanceDetails?: ESInstanceDetails,
     *     MemoryDBInstanceDetails?: MemoryDBInstanceDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
