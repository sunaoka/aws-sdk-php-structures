<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryResultsMonitorTopContributors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $localIp
 * @property string|null $snatIp
 * @property string|null $localInstanceId
 * @property string|null $localVpcId
 * @property string|null $localRegion
 * @property string|null $localAz
 * @property string|null $localSubnetId
 * @property int|null $targetPort
 * @property 'INTRA_AZ'|'INTER_AZ'|'INTER_VPC'|'UNCLASSIFIED'|'AMAZON_S3'|'AMAZON_DYNAMODB'|null $destinationCategory
 * @property string|null $remoteVpcId
 * @property string|null $remoteRegion
 * @property string|null $remoteAz
 * @property string|null $remoteSubnetId
 * @property string|null $remoteInstanceId
 * @property string|null $remoteIp
 * @property string|null $dnatIp
 * @property int|null $value
 * @property list<TraversedComponent>|null $traversedConstructs
 * @property KubernetesMetadata|null $kubernetesMetadata
 * @property string|null $localInstanceArn
 * @property string|null $localSubnetArn
 * @property string|null $localVpcArn
 * @property string|null $remoteInstanceArn
 * @property string|null $remoteSubnetArn
 * @property string|null $remoteVpcArn
 */
class MonitorTopContributorsRow extends Shape
{
    /**
     * @param array{
     *     localIp?: string|null,
     *     snatIp?: string|null,
     *     localInstanceId?: string|null,
     *     localVpcId?: string|null,
     *     localRegion?: string|null,
     *     localAz?: string|null,
     *     localSubnetId?: string|null,
     *     targetPort?: int|null,
     *     destinationCategory?: 'INTRA_AZ'|'INTER_AZ'|'INTER_VPC'|'UNCLASSIFIED'|'AMAZON_S3'|'AMAZON_DYNAMODB'|null,
     *     remoteVpcId?: string|null,
     *     remoteRegion?: string|null,
     *     remoteAz?: string|null,
     *     remoteSubnetId?: string|null,
     *     remoteInstanceId?: string|null,
     *     remoteIp?: string|null,
     *     dnatIp?: string|null,
     *     value?: int|null,
     *     traversedConstructs?: list<TraversedComponent>|null,
     *     kubernetesMetadata?: KubernetesMetadata|null,
     *     localInstanceArn?: string|null,
     *     localSubnetArn?: string|null,
     *     localVpcArn?: string|null,
     *     remoteInstanceArn?: string|null,
     *     remoteSubnetArn?: string|null,
     *     remoteVpcArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
