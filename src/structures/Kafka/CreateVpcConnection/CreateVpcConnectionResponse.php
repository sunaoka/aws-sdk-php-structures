<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateVpcConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $VpcConnectionArn
 * @property 'CREATING'|'AVAILABLE'|'INACTIVE'|'DEACTIVATING'|'DELETING'|'FAILED'|'REJECTED'|'REJECTING'|null $State
 * @property string|null $Authentication
 * @property string|null $VpcId
 * @property list<string>|null $ClientSubnets
 * @property list<string>|null $SecurityGroups
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property array<string, string>|null $Tags
 */
class CreateVpcConnectionResponse extends Response
{
}
