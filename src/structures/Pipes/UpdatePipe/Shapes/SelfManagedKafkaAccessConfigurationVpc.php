<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Subnets
 * @property list<string> $SecurityGroup
 */
class SelfManagedKafkaAccessConfigurationVpc extends Shape
{
    /**
     * @param array{
     *     Subnets?: list<string>,
     *     SecurityGroup?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
