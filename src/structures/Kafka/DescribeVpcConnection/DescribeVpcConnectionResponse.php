<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeVpcConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $VpcConnectionArn
 * @property string|null $TargetClusterArn
 * @property 'CREATING'|'AVAILABLE'|'INACTIVE'|'DEACTIVATING'|'DELETING'|'FAILED'|'REJECTED'|'REJECTING'|null $State
 * @property string|null $Authentication
 * @property string|null $VpcId
 * @property list<string>|null $Subnets
 * @property list<string>|null $SecurityGroups
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property array<string, string>|null $Tags
 */
class DescribeVpcConnectionResponse extends Response
{
}
