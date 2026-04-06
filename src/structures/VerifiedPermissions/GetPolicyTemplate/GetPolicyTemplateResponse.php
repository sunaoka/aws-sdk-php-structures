<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetPolicyTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $policyStoreId
 * @property string $policyTemplateId
 * @property string|null $description
 * @property string $statement
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 */
class GetPolicyTemplateResponse extends Response
{
}
