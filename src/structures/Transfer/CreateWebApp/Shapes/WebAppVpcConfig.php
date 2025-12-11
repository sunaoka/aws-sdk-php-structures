<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWebApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SubnetIds
 * @property string|null $VpcId
 * @property list<string>|null $SecurityGroupIds
 */
class WebAppVpcConfig extends Shape
{
    /**
     * @param array{
     *     SubnetIds?: list<string>|null,
     *     VpcId?: string|null,
     *     SecurityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
