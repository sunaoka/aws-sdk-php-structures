<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vpcId
 * @property list<string> $subnets
 * @property list<string> $securityGroupIds
 */
class VpcConfig extends Shape
{
    /**
     * @param array{
     *     vpcId?: string,
     *     subnets?: list<string>,
     *     securityGroupIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
