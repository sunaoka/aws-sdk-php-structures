<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateReplicator;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ReplicatorArn
 * @property string|null $ReplicatorName
 * @property 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED'|null $ReplicatorState
 */
class CreateReplicatorResponse extends Response
{
}
