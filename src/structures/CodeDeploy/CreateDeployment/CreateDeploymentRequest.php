<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 * @property string $deploymentGroupName
 * @property Shapes\RevisionLocation $revision
 * @property string $deploymentConfigName
 * @property string $description
 * @property bool $ignoreApplicationStopFailures
 * @property Shapes\TargetInstances $targetInstances
 * @property Shapes\AutoRollbackConfiguration $autoRollbackConfiguration
 * @property bool $updateOutdatedInstancesOnly
 * @property 'DISALLOW'|'OVERWRITE'|'RETAIN' $fileExistsBehavior
 * @property Shapes\AlarmConfiguration $overrideAlarmConfiguration
 */
class CreateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     applicationName: string,
     *     deploymentGroupName?: string,
     *     revision?: Shapes\RevisionLocation,
     *     deploymentConfigName?: string,
     *     description?: string,
     *     ignoreApplicationStopFailures?: bool,
     *     targetInstances?: Shapes\TargetInstances,
     *     autoRollbackConfiguration?: Shapes\AutoRollbackConfiguration,
     *     updateOutdatedInstancesOnly?: bool,
     *     fileExistsBehavior?: 'DISALLOW'|'OVERWRITE'|'RETAIN',
     *     overrideAlarmConfiguration?: Shapes\AlarmConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
