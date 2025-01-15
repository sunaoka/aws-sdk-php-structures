<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetPolicyStore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $policyStoreId
 * @property string $arn
 * @property Shapes\ValidationSettings $validationSettings
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property string|null $description
 */
class GetPolicyStoreResponse extends Response
{
}
