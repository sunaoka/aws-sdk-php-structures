<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifer
 * @property int $desiredCount
 * @property int $pendingCount
 * @property int $runningCount
 * @property string $status
 * @property double $trafficWeight
 * @property TargetGroupInfo $targetGroup
 * @property 'Blue'|'Green' $taskSetLabel
 */
class ECSTaskSet extends Shape
{
    /**
     * @param array{
     *     identifer?: string,
     *     desiredCount?: int,
     *     pendingCount?: int,
     *     runningCount?: int,
     *     status?: string,
     *     trafficWeight?: double,
     *     targetGroup?: TargetGroupInfo,
     *     taskSetLabel?: 'Blue'|'Green'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
