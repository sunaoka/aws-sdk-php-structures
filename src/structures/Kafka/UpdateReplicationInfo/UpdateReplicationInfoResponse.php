<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateReplicationInfo;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ReplicatorArn
 * @property 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED' $ReplicatorState
 */
class UpdateReplicationInfoResponse extends Response
{
}
