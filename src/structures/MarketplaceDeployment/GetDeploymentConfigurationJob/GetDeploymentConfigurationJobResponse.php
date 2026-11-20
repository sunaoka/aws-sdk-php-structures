<?php

namespace Sunaoka\Aws\Structures\MarketplaceDeployment\GetDeploymentConfigurationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobId
 * @property Shapes\DeploymentConfigurationDetail $configuration
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $configurationArn
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property 'FULFILLMENT_URL_UNREACHABLE'|'INTERNAL_ERROR'|'ENDPOINT_INVALID'|null $errorCode
 * @property string|null $message
 */
class GetDeploymentConfigurationJobResponse extends Response
{
}
