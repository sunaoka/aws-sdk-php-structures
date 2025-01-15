<?php

namespace Sunaoka\Aws\Structures\Ecs\RunTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $subnets
 * @property list<string>|null $securityGroups
 * @property 'ENABLED'|'DISABLED'|null $assignPublicIp
 */
class AwsVpcConfiguration extends Shape
{
    /**
     * @param array{
     *     subnets: list<string>,
     *     securityGroups?: list<string>|null,
     *     assignPublicIp?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
