<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateReplicationInfo;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ReplicatorArn
 * @property 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED'|null $ReplicatorState
 */
class UpdateReplicationInfoResponse extends Response
{
}
