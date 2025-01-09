<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $policyStoreId
 * @property string $policyId
 * @property 'STATIC'|'TEMPLATE_LINKED' $policyType
 * @property Shapes\EntityIdentifier $principal
 * @property Shapes\EntityIdentifier $resource
 * @property list<Shapes\ActionIdentifier> $actions
 * @property Shapes\PolicyDefinitionDetail $definition
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property 'Permit'|'Forbid' $effect
 */
class GetPolicyResponse extends Response
{
}
