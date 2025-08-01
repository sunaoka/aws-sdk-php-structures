<?php

namespace Sunaoka\Aws\Structures\PCS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $subnetIds
 * @property list<string>|null $securityGroupIds
 * @property 'IPV4'|'IPV6'|null $networkType
 */
class Networking extends Shape
{
    /**
     * @param array{
     *     subnetIds?: list<string>|null,
     *     securityGroupIds?: list<string>|null,
     *     networkType?: 'IPV4'|'IPV6'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
