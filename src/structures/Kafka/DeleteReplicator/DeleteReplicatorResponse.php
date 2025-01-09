<?php

namespace Sunaoka\Aws\Structures\Kafka\DeleteReplicator;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ReplicatorArn
 * @property 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED' $ReplicatorState
 */
class DeleteReplicatorResponse extends Response
{
}
