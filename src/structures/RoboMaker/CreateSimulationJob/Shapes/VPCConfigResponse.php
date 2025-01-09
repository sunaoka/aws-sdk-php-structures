<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $subnets
 * @property list<string> $securityGroups
 * @property string $vpcId
 * @property bool $assignPublicIp
 */
class VPCConfigResponse extends Shape
{
    /**
     * @param array{
     *     subnets?: list<string>,
     *     securityGroups?: list<string>,
     *     vpcId?: string,
     *     assignPublicIp?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
