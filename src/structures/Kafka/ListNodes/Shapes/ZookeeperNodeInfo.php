<?php

namespace Sunaoka\Aws\Structures\Kafka\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttachedENIId
 * @property string|null $ClientVpcIpAddress
 * @property list<string>|null $Endpoints
 * @property double|null $ZookeeperId
 * @property string|null $ZookeeperVersion
 */
class ZookeeperNodeInfo extends Shape
{
    /**
     * @param array{
     *     AttachedENIId?: string|null,
     *     ClientVpcIpAddress?: string|null,
     *     Endpoints?: list<string>|null,
     *     ZookeeperId?: double|null,
     *     ZookeeperVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
