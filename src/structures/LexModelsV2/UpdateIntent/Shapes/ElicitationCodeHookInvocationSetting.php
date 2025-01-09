<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enableCodeHookInvocation
 * @property string $invocationLabel
 */
class ElicitationCodeHookInvocationSetting extends Shape
{
    /**
     * @param array{
     *     enableCodeHookInvocation: bool,
     *     invocationLabel?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
