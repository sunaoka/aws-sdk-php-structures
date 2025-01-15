<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceName
 * @property string|null $Namespace
 * @property string|null $OptionName
 * @property string|null $Value
 */
class ConfigurationOptionSetting extends Shape
{
    /**
     * @param array{
     *     ResourceName?: string|null,
     *     Namespace?: string|null,
     *     OptionName?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
