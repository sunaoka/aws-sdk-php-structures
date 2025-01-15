<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enableCodeHookInvocation
 * @property bool $active
 * @property string|null $invocationLabel
 * @property PostDialogCodeHookInvocationSpecification $postCodeHookSpecification
 */
class DialogCodeHookInvocationSetting extends Shape
{
    /**
     * @param array{
     *     enableCodeHookInvocation: bool,
     *     active: bool,
     *     invocationLabel?: string|null,
     *     postCodeHookSpecification: PostDialogCodeHookInvocationSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
