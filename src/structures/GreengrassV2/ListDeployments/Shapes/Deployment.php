<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetArn
 * @property string $revisionId
 * @property string $deploymentId
 * @property string $deploymentName
 * @property \Aws\Api\DateTimeResult $creationTimestamp
 * @property 'ACTIVE'|'COMPLETED'|'CANCELED'|'FAILED'|'INACTIVE' $deploymentStatus
 * @property bool $isLatestForTarget
 * @property string $parentTargetArn
 */
class Deployment extends Shape
{
    /**
     * @param array{
     *     targetArn?: string,
     *     revisionId?: string,
     *     deploymentId?: string,
     *     deploymentName?: string,
     *     creationTimestamp?: \Aws\Api\DateTimeResult,
     *     deploymentStatus?: 'ACTIVE'|'COMPLETED'|'CANCELED'|'FAILED'|'INACTIVE',
     *     isLatestForTarget?: bool,
     *     parentTargetArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
