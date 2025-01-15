<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $targetArn
 * @property string|null $revisionId
 * @property string|null $deploymentId
 * @property string|null $deploymentName
 * @property \Aws\Api\DateTimeResult|null $creationTimestamp
 * @property 'ACTIVE'|'COMPLETED'|'CANCELED'|'FAILED'|'INACTIVE'|null $deploymentStatus
 * @property bool|null $isLatestForTarget
 * @property string|null $parentTargetArn
 */
class Deployment extends Shape
{
    /**
     * @param array{
     *     targetArn?: string|null,
     *     revisionId?: string|null,
     *     deploymentId?: string|null,
     *     deploymentName?: string|null,
     *     creationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     deploymentStatus?: 'ACTIVE'|'COMPLETED'|'CANCELED'|'FAILED'|'INACTIVE'|null,
     *     isLatestForTarget?: bool|null,
     *     parentTargetArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
