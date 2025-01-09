<?php

namespace Sunaoka\Aws\Structures\Kafka\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttachedENIId
 * @property double $BrokerId
 * @property string $ClientSubnet
 * @property string $ClientVpcIpAddress
 * @property BrokerSoftwareInfo $CurrentBrokerSoftwareInfo
 * @property list<string> $Endpoints
 */
class BrokerNodeInfo extends Shape
{
    /**
     * @param array{
     *     AttachedENIId?: string,
     *     BrokerId?: double,
     *     ClientSubnet?: string,
     *     ClientVpcIpAddress?: string,
     *     CurrentBrokerSoftwareInfo?: BrokerSoftwareInfo,
     *     Endpoints?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
