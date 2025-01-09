<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MaxCountRule $MaxCountRule
 * @property MaxAgeRule $MaxAgeRule
 */
class ApplicationVersionLifecycleConfig extends Shape
{
    /**
     * @param array{
     *     MaxCountRule?: MaxCountRule,
     *     MaxAgeRule?: MaxAgeRule
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
