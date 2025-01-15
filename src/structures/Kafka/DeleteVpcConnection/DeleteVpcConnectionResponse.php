<?php

namespace Sunaoka\Aws\Structures\Kafka\DeleteVpcConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $VpcConnectionArn
 * @property 'CREATING'|'AVAILABLE'|'INACTIVE'|'DEACTIVATING'|'DELETING'|'FAILED'|'REJECTED'|'REJECTING'|null $State
 */
class DeleteVpcConnectionResponse extends Response
{
}
