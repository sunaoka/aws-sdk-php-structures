<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResponseSpecification|null $captureResponse
 * @property DialogState|null $captureNextStep
 * @property ConditionalSpecification|null $captureConditional
 * @property ResponseSpecification|null $failureResponse
 * @property DialogState|null $failureNextStep
 * @property ConditionalSpecification|null $failureConditional
 * @property DialogCodeHookInvocationSetting|null $codeHook
 * @property ElicitationCodeHookInvocationSetting|null $elicitationCodeHook
 */
class SlotCaptureSetting extends Shape
{
    /**
     * @param array{
     *     captureResponse?: ResponseSpecification|null,
     *     captureNextStep?: DialogState|null,
     *     captureConditional?: ConditionalSpecification|null,
     *     failureResponse?: ResponseSpecification|null,
     *     failureNextStep?: DialogState|null,
     *     failureConditional?: ConditionalSpecification|null,
     *     codeHook?: DialogCodeHookInvocationSetting|null,
     *     elicitationCodeHook?: ElicitationCodeHookInvocationSetting|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
