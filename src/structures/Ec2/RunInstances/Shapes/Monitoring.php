<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $MetricCategoryIds
 * @property 'disabled'|'disabling'|'enabled'|'pending'|null $State
 */
class Monitoring extends Shape
{
    /**
     * @param array{
     *     MetricCategoryIds?: list<string>|null,
     *     State?: 'disabled'|'disabling'|'enabled'|'pending'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
