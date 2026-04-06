<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SecurityGroup
 * @property list<string>|null $Subnets
 */
class SelfManagedKafkaAccessConfigurationVpc extends Shape
{
    /**
     * @param array{
     *     SecurityGroup?: list<string>|null,
     *     Subnets?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
