<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $subnets
 * @property list<string>|null $securityGroups
 * @property string|null $vpcId
 * @property bool|null $assignPublicIp
 */
class VPCConfigResponse extends Shape
{
    /**
     * @param array{
     *     subnets?: list<string>|null,
     *     securityGroups?: list<string>|null,
     *     vpcId?: string|null,
     *     assignPublicIp?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
