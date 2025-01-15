<?php

namespace Sunaoka\Aws\Structures\Kafka\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttachedENIId
 * @property double|null $BrokerId
 * @property string|null $ClientSubnet
 * @property string|null $ClientVpcIpAddress
 * @property BrokerSoftwareInfo|null $CurrentBrokerSoftwareInfo
 * @property list<string>|null $Endpoints
 */
class BrokerNodeInfo extends Shape
{
    /**
     * @param array{
     *     AttachedENIId?: string|null,
     *     BrokerId?: double|null,
     *     ClientSubnet?: string|null,
     *     ClientVpcIpAddress?: string|null,
     *     CurrentBrokerSoftwareInfo?: BrokerSoftwareInfo|null,
     *     Endpoints?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
