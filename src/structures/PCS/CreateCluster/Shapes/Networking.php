<?php

namespace Sunaoka\Aws\Structures\PCS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $subnetIds
 * @property list<string> $securityGroupIds
 */
class Networking extends Shape
{
    /**
     * @param array{
     *     subnetIds?: list<string>,
     *     securityGroupIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
