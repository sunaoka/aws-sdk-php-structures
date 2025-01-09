<?php

namespace Sunaoka\Aws\Structures\Rds\CreateBlueGreenDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BlueGreenDeploymentName
 * @property string $Source
 * @property string $TargetEngineVersion
 * @property string $TargetDBParameterGroupName
 * @property string $TargetDBClusterParameterGroupName
 * @property list<Shapes\Tag> $Tags
 * @property string $TargetDBInstanceClass
 * @property bool $UpgradeTargetStorageConfig
 * @property int $TargetIops
 * @property string $TargetStorageType
 * @property int $TargetAllocatedStorage
 * @property int $TargetStorageThroughput
 */
class CreateBlueGreenDeploymentRequest extends Request
{
    /**
     * @param array{
     *     BlueGreenDeploymentName: string,
     *     Source: string,
     *     TargetEngineVersion?: string,
     *     TargetDBParameterGroupName?: string,
     *     TargetDBClusterParameterGroupName?: string,
     *     Tags?: list<Shapes\Tag>,
     *     TargetDBInstanceClass?: string,
     *     UpgradeTargetStorageConfig?: bool,
     *     TargetIops?: int,
     *     TargetStorageType?: string,
     *     TargetAllocatedStorage?: int,
     *     TargetStorageThroughput?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
