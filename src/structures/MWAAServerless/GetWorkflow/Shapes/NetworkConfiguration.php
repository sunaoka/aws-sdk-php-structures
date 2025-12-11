<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\GetWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SecurityGroupIds
 * @property list<string>|null $SubnetIds
 */
class NetworkConfiguration extends Shape
{
    /**
     * @param array{
     *     SecurityGroupIds?: list<string>|null,
     *     SubnetIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
