<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreatePolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $policyStoreId
 * @property string $policyId
 * @property 'STATIC'|'TEMPLATE_LINKED' $policyType
 * @property Shapes\EntityIdentifier|null $principal
 * @property Shapes\EntityIdentifier|null $resource
 * @property list<Shapes\ActionIdentifier>|null $actions
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property 'Permit'|'Forbid'|null $effect
 */
class CreatePolicyResponse extends Response
{
}
