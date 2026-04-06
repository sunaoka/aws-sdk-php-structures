<?php

namespace Sunaoka\Aws\Structures\MWAA\CreateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SubnetIds
 * @property list<string>|null $SecurityGroupIds
 */
class NetworkConfiguration extends Shape
{
    /**
     * @param array{
     *     SubnetIds?: list<string>|null,
     *     SecurityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
