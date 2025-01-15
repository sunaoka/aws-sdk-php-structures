<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ActiveOperationArn
 * @property 'PROVISIONED'|'SERVERLESS'|null $ClusterType
 * @property string|null $ClusterArn
 * @property string|null $ClusterName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $CurrentVersion
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'HEALING'|'MAINTENANCE'|'REBOOTING_BROKER'|'UPDATING'|null $State
 * @property StateInfo|null $StateInfo
 * @property array<string, string>|null $Tags
 * @property Provisioned|null $Provisioned
 * @property Serverless|null $Serverless
 */
class Cluster extends Shape
{
    /**
     * @param array{
     *     ActiveOperationArn?: string|null,
     *     ClusterType?: 'PROVISIONED'|'SERVERLESS'|null,
     *     ClusterArn?: string|null,
     *     ClusterName?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     CurrentVersion?: string|null,
     *     State?: 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'HEALING'|'MAINTENANCE'|'REBOOTING_BROKER'|'UPDATING'|null,
     *     StateInfo?: StateInfo|null,
     *     Tags?: array<string, string>|null,
     *     Provisioned?: Provisioned|null,
     *     Serverless?: Serverless|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
