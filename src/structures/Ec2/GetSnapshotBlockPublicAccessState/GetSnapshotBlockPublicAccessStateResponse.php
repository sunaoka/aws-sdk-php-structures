<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSnapshotBlockPublicAccessState;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'block-all-sharing'|'block-new-sharing'|'unblocked' $State
 * @property 'account'|'declarative-policy' $ManagedBy
 */
class GetSnapshotBlockPublicAccessStateResponse extends Response
{
}
