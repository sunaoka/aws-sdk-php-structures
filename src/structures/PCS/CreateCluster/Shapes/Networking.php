<?php

namespace Sunaoka\Aws\Structures\PCS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $subnetIds
 * @property list<string>|null $securityGroupIds
 */
class Networking extends Shape
{
    /**
     * @param array{
     *     subnetIds?: list<string>|null,
     *     securityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
