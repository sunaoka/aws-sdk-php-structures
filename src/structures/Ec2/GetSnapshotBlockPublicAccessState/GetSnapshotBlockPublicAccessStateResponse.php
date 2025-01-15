<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSnapshotBlockPublicAccessState;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'block-all-sharing'|'block-new-sharing'|'unblocked'|null $State
 * @property 'account'|'declarative-policy'|null $ManagedBy
 */
class GetSnapshotBlockPublicAccessStateResponse extends Response
{
}
