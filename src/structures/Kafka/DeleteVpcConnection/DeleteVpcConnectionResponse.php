<?php

namespace Sunaoka\Aws\Structures\Kafka\DeleteVpcConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $VpcConnectionArn
 * @property 'CREATING'|'AVAILABLE'|'INACTIVE'|'DEACTIVATING'|'DELETING'|'FAILED'|'REJECTED'|'REJECTING' $State
 */
class DeleteVpcConnectionResponse extends Response
{
}
