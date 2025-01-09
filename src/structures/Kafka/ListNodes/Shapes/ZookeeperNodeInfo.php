<?php

namespace Sunaoka\Aws\Structures\Kafka\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttachedENIId
 * @property string $ClientVpcIpAddress
 * @property list<string> $Endpoints
 * @property double $ZookeeperId
 * @property string $ZookeeperVersion
 */
class ZookeeperNodeInfo extends Shape
{
    /**
     * @param array{
     *     AttachedENIId?: string,
     *     ClientVpcIpAddress?: string,
     *     Endpoints?: list<string>,
     *     ZookeeperId?: double,
     *     ZookeeperVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
