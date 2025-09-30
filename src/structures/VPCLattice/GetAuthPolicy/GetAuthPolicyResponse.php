<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetAuthPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $policy
 * @property 'Active'|'Inactive'|null $state
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class GetAuthPolicyResponse extends Response
{
}
