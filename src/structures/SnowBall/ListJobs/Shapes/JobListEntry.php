<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobId
 * @property 'New'|'PreparingAppliance'|'PreparingShipment'|'InTransitToCustomer'|'WithCustomer'|'InTransitToAWS'|'WithAWSSortingFacility'|'WithAWS'|'InProgress'|'Complete'|'Cancelled'|'Listing'|'Pending'|null $JobState
 * @property bool|null $IsMaster
 * @property 'IMPORT'|'EXPORT'|'LOCAL_USE'|null $JobType
 * @property 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C'|null $SnowballType
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property string|null $Description
 */
class JobListEntry extends Shape
{
    /**
     * @param array{
     *     JobId?: string|null,
     *     JobState?: 'New'|'PreparingAppliance'|'PreparingShipment'|'InTransitToCustomer'|'WithCustomer'|'InTransitToAWS'|'WithAWSSortingFacility'|'WithAWS'|'InProgress'|'Complete'|'Cancelled'|'Listing'|'Pending'|null,
     *     IsMaster?: bool|null,
     *     JobType?: 'IMPORT'|'EXPORT'|'LOCAL_USE'|null,
     *     SnowballType?: 'STANDARD'|'EDGE'|'EDGE_C'|'EDGE_CG'|'EDGE_S'|'SNC1_HDD'|'SNC1_SSD'|'V3_5C'|'V3_5S'|'RACK_5U_C'|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
