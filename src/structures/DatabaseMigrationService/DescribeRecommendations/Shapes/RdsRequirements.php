<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EngineEdition
 * @property double $InstanceVcpu
 * @property double $InstanceMemory
 * @property int $StorageSize
 * @property int $StorageIops
 * @property string $DeploymentOption
 * @property string $EngineVersion
 */
class RdsRequirements extends Shape
{
    /**
     * @param array{
     *     EngineEdition?: string,
     *     InstanceVcpu?: double,
     *     InstanceMemory?: double,
     *     StorageSize?: int,
     *     StorageIops?: int,
     *     DeploymentOption?: string,
     *     EngineVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
