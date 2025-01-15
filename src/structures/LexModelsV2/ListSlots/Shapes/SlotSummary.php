<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSlots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $slotId
 * @property string|null $slotName
 * @property string|null $description
 * @property 'Required'|'Optional'|null $slotConstraint
 * @property string|null $slotTypeId
 * @property PromptSpecification|null $valueElicitationPromptSpecification
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class SlotSummary extends Shape
{
    /**
     * @param array{
     *     slotId?: string|null,
     *     slotName?: string|null,
     *     description?: string|null,
     *     slotConstraint?: 'Required'|'Optional'|null,
     *     slotTypeId?: string|null,
     *     valueElicitationPromptSpecification?: PromptSpecification|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
