<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResponseSpecification|null $closingResponse
 * @property bool|null $active
 * @property DialogState|null $nextStep
 * @property ConditionalSpecification|null $conditional
 */
class IntentClosingSetting extends Shape
{
    /**
     * @param array{
     *     closingResponse?: ResponseSpecification|null,
     *     active?: bool|null,
     *     nextStep?: DialogState|null,
     *     conditional?: ConditionalSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
