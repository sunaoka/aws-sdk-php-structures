<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateReplicator;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ReplicatorArn
 * @property string $ReplicatorName
 * @property 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED' $ReplicatorState
 */
class CreateReplicatorResponse extends Response
{
}
