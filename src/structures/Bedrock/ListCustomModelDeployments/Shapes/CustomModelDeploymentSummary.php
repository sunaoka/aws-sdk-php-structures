<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListCustomModelDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $customModelDeploymentArn
 * @property string $customModelDeploymentName
 * @property string $modelArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'Creating'|'Active'|'Failed' $status
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $failureMessage
 */
class CustomModelDeploymentSummary extends Shape
{
    /**
     * @param array{
     *     customModelDeploymentArn: string,
     *     customModelDeploymentName: string,
     *     modelArn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     status: 'Creating'|'Active'|'Failed',
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     failureMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
