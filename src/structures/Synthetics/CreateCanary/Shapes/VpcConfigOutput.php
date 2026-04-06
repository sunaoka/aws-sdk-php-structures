<?php

namespace Sunaoka\Aws\Structures\Synthetics\CreateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcId
 * @property list<string>|null $SubnetIds
 * @property list<string>|null $SecurityGroupIds
 */
class VpcConfigOutput extends Shape
{
    /**
     * @param array{
     *     VpcId?: string|null,
     *     SubnetIds?: list<string>|null,
     *     SecurityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
