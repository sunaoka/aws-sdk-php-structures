<?php

namespace Sunaoka\Aws\Structures\Kafka\DeleteReplicator;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ReplicatorArn
 * @property 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED'|null $ReplicatorState
 */
class DeleteReplicatorResponse extends Response
{
}
