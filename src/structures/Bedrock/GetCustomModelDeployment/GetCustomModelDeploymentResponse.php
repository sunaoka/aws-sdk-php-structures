<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetCustomModelDeployment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $customModelDeploymentArn
 * @property string $modelDeploymentName
 * @property string $modelArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'Creating'|'Active'|'Failed' $status
 * @property string|null $description
 * @property string|null $failureMessage
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class GetCustomModelDeploymentResponse extends Response
{
}
