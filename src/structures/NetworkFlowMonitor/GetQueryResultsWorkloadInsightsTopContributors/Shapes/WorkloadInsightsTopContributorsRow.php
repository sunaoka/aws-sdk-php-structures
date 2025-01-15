<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryResultsWorkloadInsightsTopContributors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $localSubnetId
 * @property string|null $localAz
 * @property string|null $localVpcId
 * @property string|null $localRegion
 * @property string|null $remoteIdentifier
 * @property int|null $value
 * @property string|null $localSubnetArn
 * @property string|null $localVpcArn
 */
class WorkloadInsightsTopContributorsRow extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     localSubnetId?: string|null,
     *     localAz?: string|null,
     *     localVpcId?: string|null,
     *     localRegion?: string|null,
     *     remoteIdentifier?: string|null,
     *     value?: int|null,
     *     localSubnetArn?: string|null,
     *     localVpcArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
