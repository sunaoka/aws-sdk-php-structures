<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutRemediationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceValue|null $ResourceValue
 * @property StaticValue|null $StaticValue
 */
class RemediationParameterValue extends Shape
{
    /**
     * @param array{
     *     ResourceValue?: ResourceValue|null,
     *     StaticValue?: StaticValue|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
