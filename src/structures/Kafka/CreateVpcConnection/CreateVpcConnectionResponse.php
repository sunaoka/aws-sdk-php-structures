<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateVpcConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $VpcConnectionArn
 * @property 'CREATING'|'AVAILABLE'|'INACTIVE'|'DEACTIVATING'|'DELETING'|'FAILED'|'REJECTED'|'REJECTING' $State
 * @property string $Authentication
 * @property string $VpcId
 * @property list<string> $ClientSubnets
 * @property list<string> $SecurityGroups
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property array<string, string> $Tags
 */
class CreateVpcConnectionResponse extends Response
{
}
