<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSlotTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $slotTypeId
 * @property string $slotTypeName
 * @property string $description
 * @property string $parentSlotTypeSignature
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property 'Custom'|'Extended'|'ExternalGrammar'|'Composite' $slotTypeCategory
 */
class SlotTypeSummary extends Shape
{
    /**
     * @param array{
     *     slotTypeId?: string,
     *     slotTypeName?: string,
     *     description?: string,
     *     parentSlotTypeSignature?: string,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     slotTypeCategory?: 'Custom'|'Extended'|'ExternalGrammar'|'Composite'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
