<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property 'New'|'PreparingAppliance'|'PreparingShipment'|'InTransitToCustomer'|'WithCustomer'|'InTransitToAWS'|'WithAWSSortingFacility'|'WithAWS'|'InProgress'|'Complete'|'Cancelled'|'Listing'|'Pending' $JobState
 * @property bool $IsMaster
 * @property 'IMPORT'|'EXPORT'|'LOCAL_USE' $JobType
 * @property 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C' $SnowballType
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property string $Description
 */
class JobListEntry extends Shape
{
    /**
     * @param array{
     *     JobId?: string,
     *     JobState?: 'New'|'PreparingAppliance'|'PreparingShipment'|'InTransitToCustomer'|'WithCustomer'|'InTransitToAWS'|'WithAWSSortingFacility'|'WithAWS'|'InProgress'|'Complete'|'Cancelled'|'Listing'|'Pending',
     *     IsMaster?: bool,
     *     JobType?: 'IMPORT'|'EXPORT'|'LOCAL_USE',
     *     SnowballType?: 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C',
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
