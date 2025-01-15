<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 * @property string|null $deploymentGroupName
 * @property Shapes\RevisionLocation|null $revision
 * @property string|null $deploymentConfigName
 * @property string|null $description
 * @property bool|null $ignoreApplicationStopFailures
 * @property Shapes\TargetInstances|null $targetInstances
 * @property Shapes\AutoRollbackConfiguration|null $autoRollbackConfiguration
 * @property bool|null $updateOutdatedInstancesOnly
 * @property 'DISALLOW'|'OVERWRITE'|'RETAIN'|null $fileExistsBehavior
 * @property Shapes\AlarmConfiguration|null $overrideAlarmConfiguration
 */
class CreateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     applicationName: string,
     *     deploymentGroupName?: string|null,
     *     revision?: Shapes\RevisionLocation|null,
     *     deploymentConfigName?: string|null,
     *     description?: string|null,
     *     ignoreApplicationStopFailures?: bool|null,
     *     targetInstances?: Shapes\TargetInstances|null,
     *     autoRollbackConfiguration?: Shapes\AutoRollbackConfiguration|null,
     *     updateOutdatedInstancesOnly?: bool|null,
     *     fileExistsBehavior?: 'DISALLOW'|'OVERWRITE'|'RETAIN'|null,
     *     overrideAlarmConfiguration?: Shapes\AlarmConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
