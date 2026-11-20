<?php

namespace Sunaoka\Aws\Structures\MarketplaceDeployment\StartDeploymentConfigurationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobId
 * @property Shapes\DeploymentConfigurationDetail $configuration
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class StartDeploymentConfigurationJobResponse extends Response
{
}
