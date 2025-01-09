<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT' $BrokerAZDistribution
 * @property list<string> $ClientSubnets
 * @property string $InstanceType
 * @property list<string> $SecurityGroups
 * @property StorageInfo $StorageInfo
 * @property ConnectivityInfo $ConnectivityInfo
 * @property list<string> $ZoneIds
 */
class BrokerNodeGroupInfo extends Shape
{
    /**
     * @param array{
     *     BrokerAZDistribution?: 'DEFAULT',
     *     ClientSubnets: list<string>,
     *     InstanceType: string,
     *     SecurityGroups?: list<string>,
     *     StorageInfo?: StorageInfo,
     *     ConnectivityInfo?: ConnectivityInfo,
     *     ZoneIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
