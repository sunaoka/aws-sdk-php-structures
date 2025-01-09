<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcId
 * @property list<string> $Subnets
 * @property list<string> $SecurityGroupIds
 */
class AwsCodeBuildProjectVpcConfig extends Shape
{
    /**
     * @param array{
     *     VpcId?: string,
     *     Subnets?: list<string>,
     *     SecurityGroupIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
