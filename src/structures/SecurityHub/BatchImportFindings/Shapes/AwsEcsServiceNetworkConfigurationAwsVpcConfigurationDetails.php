<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssignPublicIp
 * @property list<string> $SecurityGroups
 * @property list<string> $Subnets
 */
class AwsEcsServiceNetworkConfigurationAwsVpcConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     AssignPublicIp?: string,
     *     SecurityGroups?: list<string>,
     *     Subnets?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
