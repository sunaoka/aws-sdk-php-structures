<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeConfigurationOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Pattern
 * @property string $Label
 */
class OptionRestrictionRegex extends Shape
{
    /**
     * @param array{
     *     Pattern?: string,
     *     Label?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
