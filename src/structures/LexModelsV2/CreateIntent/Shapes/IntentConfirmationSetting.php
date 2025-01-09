<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PromptSpecification $promptSpecification
 * @property ResponseSpecification $declinationResponse
 * @property bool $active
 * @property ResponseSpecification $confirmationResponse
 * @property DialogState $confirmationNextStep
 * @property ConditionalSpecification $confirmationConditional
 * @property DialogState $declinationNextStep
 * @property ConditionalSpecification $declinationConditional
 * @property ResponseSpecification $failureResponse
 * @property DialogState $failureNextStep
 * @property ConditionalSpecification $failureConditional
 * @property DialogCodeHookInvocationSetting $codeHook
 * @property ElicitationCodeHookInvocationSetting $elicitationCodeHook
 */
class IntentConfirmationSetting extends Shape
{
    /**
     * @param array{
     *     promptSpecification: PromptSpecification,
     *     declinationResponse?: ResponseSpecification,
     *     active?: bool,
     *     confirmationResponse?: ResponseSpecification,
     *     confirmationNextStep?: DialogState,
     *     confirmationConditional?: ConditionalSpecification,
     *     declinationNextStep?: DialogState,
     *     declinationConditional?: ConditionalSpecification,
     *     failureResponse?: ResponseSpecification,
     *     failureNextStep?: DialogState,
     *     failureConditional?: ConditionalSpecification,
     *     codeHook?: DialogCodeHookInvocationSetting,
     *     elicitationCodeHook?: ElicitationCodeHookInvocationSetting
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
