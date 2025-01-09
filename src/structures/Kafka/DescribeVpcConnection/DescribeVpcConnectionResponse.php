<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeVpcConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $VpcConnectionArn
 * @property string $TargetClusterArn
 * @property 'CREATING'|'AVAILABLE'|'INACTIVE'|'DEACTIVATING'|'DELETING'|'FAILED'|'REJECTED'|'REJECTING' $State
 * @property string $Authentication
 * @property string $VpcId
 * @property list<string> $Subnets
 * @property list<string> $SecurityGroups
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property array<string, string> $Tags
 */
class DescribeVpcConnectionResponse extends Response
{
}
