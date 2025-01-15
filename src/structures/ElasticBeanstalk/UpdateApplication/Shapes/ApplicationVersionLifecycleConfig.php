<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MaxCountRule|null $MaxCountRule
 * @property MaxAgeRule|null $MaxAgeRule
 */
class ApplicationVersionLifecycleConfig extends Shape
{
    /**
     * @param array{
     *     MaxCountRule?: MaxCountRule|null,
     *     MaxAgeRule?: MaxAgeRule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
