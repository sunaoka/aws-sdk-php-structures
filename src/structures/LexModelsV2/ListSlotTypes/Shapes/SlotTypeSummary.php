<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSlotTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $slotTypeId
 * @property string|null $slotTypeName
 * @property string|null $description
 * @property string|null $parentSlotTypeSignature
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property 'Custom'|'Extended'|'ExternalGrammar'|'Composite'|null $slotTypeCategory
 */
class SlotTypeSummary extends Shape
{
    /**
     * @param array{
     *     slotTypeId?: string|null,
     *     slotTypeName?: string|null,
     *     description?: string|null,
     *     parentSlotTypeSignature?: string|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     slotTypeCategory?: 'Custom'|'Extended'|'ExternalGrammar'|'Composite'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
