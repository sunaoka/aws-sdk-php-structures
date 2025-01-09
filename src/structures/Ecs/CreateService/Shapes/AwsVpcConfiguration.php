<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $subnets
 * @property list<string> $securityGroups
 * @property 'ENABLED'|'DISABLED' $assignPublicIp
 */
class AwsVpcConfiguration extends Shape
{
    /**
     * @param array{
     *     subnets: list<string>,
     *     securityGroups?: list<string>,
     *     assignPublicIp?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
