<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $policyStoreId
 * @property string $policyId
 * @property 'STATIC'|'TEMPLATE_LINKED' $policyType
 * @property Shapes\EntityIdentifier|null $principal
 * @property Shapes\EntityIdentifier|null $resource
 * @property list<Shapes\ActionIdentifier>|null $actions
 * @property Shapes\PolicyDefinitionDetail $definition
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property 'Permit'|'Forbid'|null $effect
 */
class GetPolicyResponse extends Response
{
}
