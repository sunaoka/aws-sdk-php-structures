<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $securityGroupIds
 * @property list<string>|null $subnetIds
 * @property string|null $vpcId
 */
class LambdaVpcConfig extends Shape
{
    /**
     * @param array{
     *     securityGroupIds?: list<string>|null,
     *     subnetIds?: list<string>|null,
     *     vpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
