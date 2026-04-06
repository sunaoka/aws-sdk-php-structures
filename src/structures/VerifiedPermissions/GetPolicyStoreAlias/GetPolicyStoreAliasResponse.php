<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetPolicyStoreAlias;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $aliasName
 * @property string $policyStoreId
 * @property string $aliasArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'Active'|'PendingDeletion' $state
 */
class GetPolicyStoreAliasResponse extends Response
{
}
