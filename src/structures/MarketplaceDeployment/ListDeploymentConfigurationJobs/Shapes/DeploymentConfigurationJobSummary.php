<?php

namespace Sunaoka\Aws\Structures\MarketplaceDeployment\ListDeploymentConfigurationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $status
 * @property DeploymentConfigurationDetail $configuration
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class DeploymentConfigurationJobSummary extends Shape
{
    /**
     * @param array{
     *     jobId: string,
     *     status: 'IN_PROGRESS'|'SUCCEEDED'|'FAILED',
     *     configuration: DeploymentConfigurationDetail,
     *     createdAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
