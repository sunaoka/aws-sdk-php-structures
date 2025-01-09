<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateConfigurationTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceName
 * @property string $Namespace
 * @property string $OptionName
 * @property string $Value
 */
class ConfigurationOptionSetting extends Shape
{
    /**
     * @param array{
     *     ResourceName?: string,
     *     Namespace?: string,
     *     OptionName?: string,
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
