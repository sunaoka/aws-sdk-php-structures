<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationJobBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $subnets
 * @property list<string>|null $securityGroups
 * @property bool|null $assignPublicIp
 */
class VPCConfig extends Shape
{
    /**
     * @param array{
     *     subnets: list<string>,
     *     securityGroups?: list<string>|null,
     *     assignPublicIp?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
