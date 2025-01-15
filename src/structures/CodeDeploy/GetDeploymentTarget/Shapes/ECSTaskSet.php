<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identifer
 * @property int|null $desiredCount
 * @property int|null $pendingCount
 * @property int|null $runningCount
 * @property string|null $status
 * @property double|null $trafficWeight
 * @property TargetGroupInfo|null $targetGroup
 * @property 'Blue'|'Green'|null $taskSetLabel
 */
class ECSTaskSet extends Shape
{
    /**
     * @param array{
     *     identifer?: string|null,
     *     desiredCount?: int|null,
     *     pendingCount?: int|null,
     *     runningCount?: int|null,
     *     status?: string|null,
     *     trafficWeight?: double|null,
     *     targetGroup?: TargetGroupInfo|null,
     *     taskSetLabel?: 'Blue'|'Green'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
