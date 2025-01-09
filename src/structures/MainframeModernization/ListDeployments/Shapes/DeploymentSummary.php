<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property int<1, max> $applicationVersion
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $deploymentId
 * @property string $environmentId
 * @property 'Deploying'|'Succeeded'|'Failed'|'Updating Deployment' $status
 * @property string $statusReason
 */
class DeploymentSummary extends Shape
{
    /**
     * @param array{
     *     applicationId: string,
     *     applicationVersion: int<1, max>,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     deploymentId: string,
     *     environmentId: string,
     *     status: 'Deploying'|'Succeeded'|'Failed'|'Updating Deployment',
     *     statusReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
