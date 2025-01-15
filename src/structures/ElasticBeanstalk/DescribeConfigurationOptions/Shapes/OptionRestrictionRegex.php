<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeConfigurationOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Pattern
 * @property string|null $Label
 */
class OptionRestrictionRegex extends Shape
{
    /**
     * @param array{
     *     Pattern?: string|null,
     *     Label?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
