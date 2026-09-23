<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deploymentId
 * @property string $deploymentArn
 * @property string|null $deploymentName
 * @property 'DRAFT'|'ACTIVE'|'DISABLED'|null $status
 * @property string|null $version
 * @property bool|null $hasPublishedVersion
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class DeploymentSummary extends Shape
{
    /**
     * @param array{
     *     deploymentId: string,
     *     deploymentArn: string,
     *     deploymentName?: string|null,
     *     status?: 'DRAFT'|'ACTIVE'|'DISABLED'|null,
     *     version?: string|null,
     *     hasPublishedVersion?: bool|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
