<?php

namespace Sunaoka\Aws\Structures\Rds\CreateBlueGreenDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BlueGreenDeploymentName
 * @property string $Source
 * @property string|null $TargetEngineVersion
 * @property string|null $TargetDBParameterGroupName
 * @property string|null $TargetDBClusterParameterGroupName
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $TargetDBInstanceClass
 * @property bool|null $UpgradeTargetStorageConfig
 * @property int|null $TargetIops
 * @property string|null $TargetStorageType
 * @property int|null $TargetAllocatedStorage
 * @property int|null $TargetStorageThroughput
 */
class CreateBlueGreenDeploymentRequest extends Request
{
    /**
     * @param array{
     *     BlueGreenDeploymentName: string,
     *     Source: string,
     *     TargetEngineVersion?: string|null,
     *     TargetDBParameterGroupName?: string|null,
     *     TargetDBClusterParameterGroupName?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     TargetDBInstanceClass?: string|null,
     *     UpgradeTargetStorageConfig?: bool|null,
     *     TargetIops?: int|null,
     *     TargetStorageType?: string|null,
     *     TargetAllocatedStorage?: int|null,
     *     TargetStorageThroughput?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
