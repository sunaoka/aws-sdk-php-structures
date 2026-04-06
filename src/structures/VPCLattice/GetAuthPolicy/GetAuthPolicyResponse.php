<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetAuthPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $policy
 * @property 'Active'|'Inactive'|null $state
 */
class GetAuthPolicyResponse extends Response
{
}
