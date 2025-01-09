<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enableCodeHookInvocation
 * @property bool $active
 * @property string $invocationLabel
 * @property PostDialogCodeHookInvocationSpecification $postCodeHookSpecification
 */
class DialogCodeHookInvocationSetting extends Shape
{
    /**
     * @param array{
     *     enableCodeHookInvocation: bool,
     *     active: bool,
     *     invocationLabel?: string,
     *     postCodeHookSpecification: PostDialogCodeHookInvocationSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
