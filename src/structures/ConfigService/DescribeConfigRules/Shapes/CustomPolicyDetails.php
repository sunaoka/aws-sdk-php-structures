<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyRuntime
 * @property string $PolicyText
 * @property bool|null $EnableDebugLogDelivery
 */
class CustomPolicyDetails extends Shape
{
    /**
     * @param array{
     *     PolicyRuntime: string,
     *     PolicyText: string,
     *     EnableDebugLogDelivery?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
