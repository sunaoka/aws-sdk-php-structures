<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryResultsMonitorTopContributors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $localIp
 * @property string $snatIp
 * @property string $localInstanceId
 * @property string $localVpcId
 * @property string $localRegion
 * @property string $localAz
 * @property string $localSubnetId
 * @property int $targetPort
 * @property 'INTRA_AZ'|'INTER_AZ'|'INTER_VPC'|'UNCLASSIFIED'|'AMAZON_S3'|'AMAZON_DYNAMODB' $destinationCategory
 * @property string $remoteVpcId
 * @property string $remoteRegion
 * @property string $remoteAz
 * @property string $remoteSubnetId
 * @property string $remoteInstanceId
 * @property string $remoteIp
 * @property string $dnatIp
 * @property int $value
 * @property list<TraversedComponent> $traversedConstructs
 * @property KubernetesMetadata $kubernetesMetadata
 * @property string $localInstanceArn
 * @property string $localSubnetArn
 * @property string $localVpcArn
 * @property string $remoteInstanceArn
 * @property string $remoteSubnetArn
 * @property string $remoteVpcArn
 */
class MonitorTopContributorsRow extends Shape
{
    /**
     * @param array{
     *     localIp?: string,
     *     snatIp?: string,
     *     localInstanceId?: string,
     *     localVpcId?: string,
     *     localRegion?: string,
     *     localAz?: string,
     *     localSubnetId?: string,
     *     targetPort?: int,
     *     destinationCategory?: 'INTRA_AZ'|'INTER_AZ'|'INTER_VPC'|'UNCLASSIFIED'|'AMAZON_S3'|'AMAZON_DYNAMODB',
     *     remoteVpcId?: string,
     *     remoteRegion?: string,
     *     remoteAz?: string,
     *     remoteSubnetId?: string,
     *     remoteInstanceId?: string,
     *     remoteIp?: string,
     *     dnatIp?: string,
     *     value?: int,
     *     traversedConstructs?: list<TraversedComponent>,
     *     kubernetesMetadata?: KubernetesMetadata,
     *     localInstanceArn?: string,
     *     localSubnetArn?: string,
     *     localVpcArn?: string,
     *     remoteInstanceArn?: string,
     *     remoteSubnetArn?: string,
     *     remoteVpcArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
