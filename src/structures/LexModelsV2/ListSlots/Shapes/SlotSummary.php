<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSlots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $slotId
 * @property string $slotName
 * @property string $description
 * @property 'Required'|'Optional' $slotConstraint
 * @property string $slotTypeId
 * @property PromptSpecification $valueElicitationPromptSpecification
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 */
class SlotSummary extends Shape
{
    /**
     * @param array{
     *     slotId?: string,
     *     slotName?: string,
     *     description?: string,
     *     slotConstraint?: 'Required'|'Optional',
     *     slotTypeId?: string,
     *     valueElicitationPromptSpecification?: PromptSpecification,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
