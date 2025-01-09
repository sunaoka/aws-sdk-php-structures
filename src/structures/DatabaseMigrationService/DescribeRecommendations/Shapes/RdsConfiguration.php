<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EngineEdition
 * @property string $InstanceType
 * @property double $InstanceVcpu
 * @property double $InstanceMemory
 * @property string $StorageType
 * @property int $StorageSize
 * @property int $StorageIops
 * @property string $DeploymentOption
 * @property string $EngineVersion
 */
class RdsConfiguration extends Shape
{
    /**
     * @param array{
     *     EngineEdition?: string,
     *     InstanceType?: string,
     *     InstanceVcpu?: double,
     *     InstanceMemory?: double,
     *     StorageType?: string,
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
