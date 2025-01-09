<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryResultsWorkloadInsightsTopContributors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $localSubnetId
 * @property string $localAz
 * @property string $localVpcId
 * @property string $localRegion
 * @property string $remoteIdentifier
 * @property int $value
 * @property string $localSubnetArn
 * @property string $localVpcArn
 */
class WorkloadInsightsTopContributorsRow extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     localSubnetId?: string,
     *     localAz?: string,
     *     localVpcId?: string,
     *     localRegion?: string,
     *     remoteIdentifier?: string,
     *     value?: int,
     *     localSubnetArn?: string,
     *     localVpcArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
