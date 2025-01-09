<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Subnets
 * @property list<string> $SecurityGroups
 * @property 'ENABLED'|'DISABLED' $AssignPublicIp
 */
class AwsVpcConfiguration extends Shape
{
    /**
     * @param array{
     *     Subnets: list<string>,
     *     SecurityGroups?: list<string>,
     *     AssignPublicIp?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
