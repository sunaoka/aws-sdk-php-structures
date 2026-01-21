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
 * @property 'ENABLED'|'DISABLED'|null $deletionProtection
 * @property Shapes\EncryptionState|null $encryptionState
 * @property 'CEDAR_2'|'CEDAR_4'|null $cedarVersion
 * @property array<string, string>|null $tags
 */
class GetPolicyStoreResponse extends Response
{
}
