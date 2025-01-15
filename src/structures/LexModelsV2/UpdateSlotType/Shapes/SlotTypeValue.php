<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlotType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SampleValue|null $sampleValue
 * @property list<SampleValue>|null $synonyms
 */
class SlotTypeValue extends Shape
{
    /**
     * @param array{
     *     sampleValue?: SampleValue|null,
     *     synonyms?: list<SampleValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
