<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResponseSpecification|null $initialResponse
 * @property DialogState|null $nextStep
 * @property ConditionalSpecification|null $conditional
 * @property DialogCodeHookInvocationSetting|null $codeHook
 */
class InitialResponseSetting extends Shape
{
    /**
     * @param array{
     *     initialResponse?: ResponseSpecification|null,
     *     nextStep?: DialogState|null,
     *     conditional?: ConditionalSpecification|null,
     *     codeHook?: DialogCodeHookInvocationSetting|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
