<?php

namespace Sunaoka\Aws\Structures\SecretsManager\AssociateCrossAccountReplica;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ARN
 * @property string|null $CrossAccountReplicaARN
 * @property 'InSync'|'Failed'|'InProgress'|'Pending'|'Detached'|null $ReplicationStatus
 */
class AssociateCrossAccountReplicaResponse extends Response
{
}
