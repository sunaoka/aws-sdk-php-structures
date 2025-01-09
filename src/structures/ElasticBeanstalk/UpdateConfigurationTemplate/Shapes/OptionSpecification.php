<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateConfigurationTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceName
 * @property string $Namespace
 * @property string $OptionName
 */
class OptionSpecification extends Shape
{
    /**
     * @param array{
     *     ResourceName?: string,
     *     Namespace?: string,
     *     OptionName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
