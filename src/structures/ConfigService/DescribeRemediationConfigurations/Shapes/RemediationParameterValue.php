<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceValue $ResourceValue
 * @property StaticValue $StaticValue
 */
class RemediationParameterValue extends Shape
{
    /**
     * @param array{
     *     ResourceValue?: ResourceValue,
     *     StaticValue?: StaticValue
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
