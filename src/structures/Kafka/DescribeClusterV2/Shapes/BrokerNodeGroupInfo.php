<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|null $BrokerAZDistribution
 * @property list<string> $ClientSubnets
 * @property string $InstanceType
 * @property list<string>|null $SecurityGroups
 * @property StorageInfo|null $StorageInfo
 * @property ConnectivityInfo|null $ConnectivityInfo
 * @property list<string>|null $ZoneIds
 */
class BrokerNodeGroupInfo extends Shape
{
    /**
     * @param array{
     *     BrokerAZDistribution?: 'DEFAULT'|null,
     *     ClientSubnets: list<string>,
     *     InstanceType: string,
     *     SecurityGroups?: list<string>|null,
     *     StorageInfo?: StorageInfo|null,
     *     ConnectivityInfo?: ConnectivityInfo|null,
     *     ZoneIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
