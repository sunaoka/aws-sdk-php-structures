<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBrokerInstanceOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AvailabilityZone> $AvailabilityZones
 * @property 'ACTIVEMQ'|'RABBITMQ' $EngineType
 * @property string $HostInstanceType
 * @property 'EBS'|'EFS' $StorageType
 * @property list<'SINGLE_INSTANCE'|'ACTIVE_STANDBY_MULTI_AZ'|'CLUSTER_MULTI_AZ'> $SupportedDeploymentModes
 * @property list<string> $SupportedEngineVersions
 */
class BrokerInstanceOption extends Shape
{
    /**
     * @param array{
     *     AvailabilityZones?: list<AvailabilityZone>,
     *     EngineType?: 'ACTIVEMQ'|'RABBITMQ',
     *     HostInstanceType?: string,
     *     StorageType?: 'EBS'|'EFS',
     *     SupportedDeploymentModes?: list<'SINGLE_INSTANCE'|'ACTIVE_STANDBY_MULTI_AZ'|'CLUSTER_MULTI_AZ'>,
     *     SupportedEngineVersions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
