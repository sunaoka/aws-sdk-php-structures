<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetIdentitySource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property Shapes\IdentitySourceDetails $details
 * @property string $identitySourceId
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property string $policyStoreId
 * @property string $principalEntityType
 * @property Shapes\ConfigurationDetail $configuration
 */
class GetIdentitySourceResponse extends Response
{
}
