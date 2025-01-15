<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssignPublicIp
 * @property list<string>|null $SecurityGroups
 * @property list<string>|null $Subnets
 */
class AwsEcsServiceNetworkConfigurationAwsVpcConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     AssignPublicIp?: string|null,
     *     SecurityGroups?: list<string>|null,
     *     Subnets?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
