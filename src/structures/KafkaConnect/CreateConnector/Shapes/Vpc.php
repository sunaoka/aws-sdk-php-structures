<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $securityGroups
 * @property list<string> $subnets
 */
class Vpc extends Shape
{
    /**
     * @param array{
     *     securityGroups?: list<string>,
     *     subnets: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
