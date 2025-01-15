<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $vpcId
 * @property list<string>|null $subnets
 * @property list<string>|null $securityGroupIds
 */
class VpcConfig extends Shape
{
    /**
     * @param array{
     *     vpcId?: string|null,
     *     subnets?: list<string>|null,
     *     securityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
