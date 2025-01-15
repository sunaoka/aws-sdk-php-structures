<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PromptSpecification $promptSpecification
 * @property ResponseSpecification|null $declinationResponse
 * @property bool|null $active
 * @property ResponseSpecification|null $confirmationResponse
 * @property DialogState|null $confirmationNextStep
 * @property ConditionalSpecification|null $confirmationConditional
 * @property DialogState|null $declinationNextStep
 * @property ConditionalSpecification|null $declinationConditional
 * @property ResponseSpecification|null $failureResponse
 * @property DialogState|null $failureNextStep
 * @property ConditionalSpecification|null $failureConditional
 * @property DialogCodeHookInvocationSetting|null $codeHook
 * @property ElicitationCodeHookInvocationSetting|null $elicitationCodeHook
 */
class IntentConfirmationSetting extends Shape
{
    /**
     * @param array{
     *     promptSpecification: PromptSpecification,
     *     declinationResponse?: ResponseSpecification|null,
     *     active?: bool|null,
     *     confirmationResponse?: ResponseSpecification|null,
     *     confirmationNextStep?: DialogState|null,
     *     confirmationConditional?: ConditionalSpecification|null,
     *     declinationNextStep?: DialogState|null,
     *     declinationConditional?: ConditionalSpecification|null,
     *     failureResponse?: ResponseSpecification|null,
     *     failureNextStep?: DialogState|null,
     *     failureConditional?: ConditionalSpecification|null,
     *     codeHook?: DialogCodeHookInvocationSetting|null,
     *     elicitationCodeHook?: ElicitationCodeHookInvocationSetting|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
