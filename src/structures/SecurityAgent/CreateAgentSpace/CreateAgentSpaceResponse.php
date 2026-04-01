<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateAgentSpace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $agentSpaceId
 * @property string $name
 * @property string|null $description
 * @property Shapes\AWSResources|null $awsResources
 * @property list<string>|null $targetDomainIds
 * @property Shapes\CodeReviewSettings|null $codeReviewSettings
 * @property string|null $kmsKeyId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class CreateAgentSpaceResponse extends Response
{
}
