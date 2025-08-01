<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $subnetIds
 * @property list<string>|null $securityGroupIds
 * @property string|null $vpcId
 */
class LambdaVpcConfig extends Shape
{
    /**
     * @param array{
     *     subnetIds?: list<string>|null,
     *     securityGroupIds?: list<string>|null,
     *     vpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
