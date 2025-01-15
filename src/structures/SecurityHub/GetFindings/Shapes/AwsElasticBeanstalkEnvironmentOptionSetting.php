<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Namespace
 * @property string|null $OptionName
 * @property string|null $ResourceName
 * @property string|null $Value
 */
class AwsElasticBeanstalkEnvironmentOptionSetting extends Shape
{
    /**
     * @param array{
     *     Namespace?: string|null,
     *     OptionName?: string|null,
     *     ResourceName?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
