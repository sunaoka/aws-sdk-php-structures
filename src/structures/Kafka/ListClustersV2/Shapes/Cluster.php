<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClustersV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActiveOperationArn
 * @property 'PROVISIONED'|'SERVERLESS' $ClusterType
 * @property string $ClusterArn
 * @property string $ClusterName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $CurrentVersion
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'HEALING'|'MAINTENANCE'|'REBOOTING_BROKER'|'UPDATING' $State
 * @property StateInfo $StateInfo
 * @property array<string, string> $Tags
 * @property Provisioned $Provisioned
 * @property Serverless $Serverless
 */
class Cluster extends Shape
{
    /**
     * @param array{
     *     ActiveOperationArn?: string,
     *     ClusterType?: 'PROVISIONED'|'SERVERLESS',
     *     ClusterArn?: string,
     *     ClusterName?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     CurrentVersion?: string,
     *     State?: 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'HEALING'|'MAINTENANCE'|'REBOOTING_BROKER'|'UPDATING',
     *     StateInfo?: StateInfo,
     *     Tags?: array<string, string>,
     *     Provisioned?: Provisioned,
     *     Serverless?: Serverless
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
