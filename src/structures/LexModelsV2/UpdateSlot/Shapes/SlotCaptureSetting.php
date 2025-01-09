<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResponseSpecification $captureResponse
 * @property DialogState $captureNextStep
 * @property ConditionalSpecification $captureConditional
 * @property ResponseSpecification $failureResponse
 * @property DialogState $failureNextStep
 * @property ConditionalSpecification $failureConditional
 * @property DialogCodeHookInvocationSetting $codeHook
 * @property ElicitationCodeHookInvocationSetting $elicitationCodeHook
 */
class SlotCaptureSetting extends Shape
{
    /**
     * @param array{
     *     captureResponse?: ResponseSpecification,
     *     captureNextStep?: DialogState,
     *     captureConditional?: ConditionalSpecification,
     *     failureResponse?: ResponseSpecification,
     *     failureNextStep?: DialogState,
     *     failureConditional?: ConditionalSpecification,
     *     codeHook?: DialogCodeHookInvocationSetting,
     *     elicitationCodeHook?: ElicitationCodeHookInvocationSetting
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
