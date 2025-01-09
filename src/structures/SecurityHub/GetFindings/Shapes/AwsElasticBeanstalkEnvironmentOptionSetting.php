<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Namespace
 * @property string $OptionName
 * @property string $ResourceName
 * @property string $Value
 */
class AwsElasticBeanstalkEnvironmentOptionSetting extends Shape
{
    /**
     * @param array{
     *     Namespace?: string,
     *     OptionName?: string,
     *     ResourceName?: string,
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
