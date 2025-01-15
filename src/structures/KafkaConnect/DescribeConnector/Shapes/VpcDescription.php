<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $securityGroups
 * @property list<string>|null $subnets
 */
class VpcDescription extends Shape
{
    /**
     * @param array{
     *     securityGroups?: list<string>|null,
     *     subnets?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
