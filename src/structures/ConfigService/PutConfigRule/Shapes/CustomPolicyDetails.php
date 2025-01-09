<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConfigRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyRuntime
 * @property string $PolicyText
 * @property bool $EnableDebugLogDelivery
 */
class CustomPolicyDetails extends Shape
{
    /**
     * @param array{
     *     PolicyRuntime: string,
     *     PolicyText: string,
     *     EnableDebugLogDelivery?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
