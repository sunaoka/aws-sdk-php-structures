<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Subnets
 * @property list<string>|null $SecurityGroup
 */
class SelfManagedKafkaAccessConfigurationVpc extends Shape
{
    /**
     * @param array{
     *     Subnets?: list<string>|null,
     *     SecurityGroup?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
