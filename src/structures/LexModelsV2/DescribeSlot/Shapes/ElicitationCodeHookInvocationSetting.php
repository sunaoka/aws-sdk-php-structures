<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enableCodeHookInvocation
 * @property string|null $invocationLabel
 */
class ElicitationCodeHookInvocationSetting extends Shape
{
    /**
     * @param array{
     *     enableCodeHookInvocation: bool,
     *     invocationLabel?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
