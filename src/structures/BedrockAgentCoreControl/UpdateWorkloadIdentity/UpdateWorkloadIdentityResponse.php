<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateWorkloadIdentity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $workloadIdentityArn
 * @property list<string>|null $allowedResourceOauth2ReturnUrls
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 */
class UpdateWorkloadIdentityResponse extends Response
{
}
