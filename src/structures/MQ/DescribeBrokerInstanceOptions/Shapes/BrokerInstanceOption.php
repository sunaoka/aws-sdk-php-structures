<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBrokerInstanceOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AvailabilityZone>|null $AvailabilityZones
 * @property 'ACTIVEMQ'|'RABBITMQ'|null $EngineType
 * @property string|null $HostInstanceType
 * @property 'EBS'|'EFS'|null $StorageType
 * @property list<'SINGLE_INSTANCE'|'ACTIVE_STANDBY_MULTI_AZ'|'CLUSTER_MULTI_AZ'>|null $SupportedDeploymentModes
 * @property list<string>|null $SupportedEngineVersions
 */
class BrokerInstanceOption extends Shape
{
    /**
     * @param array{
     *     AvailabilityZones?: list<AvailabilityZone>|null,
     *     EngineType?: 'ACTIVEMQ'|'RABBITMQ'|null,
     *     HostInstanceType?: string|null,
     *     StorageType?: 'EBS'|'EFS'|null,
     *     SupportedDeploymentModes?: list<'SINGLE_INSTANCE'|'ACTIVE_STANDBY_MULTI_AZ'|'CLUSTER_MULTI_AZ'>|null,
     *     SupportedEngineVersions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
