<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResponseSpecification $initialResponse
 * @property DialogState $nextStep
 * @property ConditionalSpecification $conditional
 * @property DialogCodeHookInvocationSetting $codeHook
 */
class InitialResponseSetting extends Shape
{
    /**
     * @param array{
     *     initialResponse?: ResponseSpecification,
     *     nextStep?: DialogState,
     *     conditional?: ConditionalSpecification,
     *     codeHook?: DialogCodeHookInvocationSetting
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
