<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlotType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SampleValue $sampleValue
 * @property list<SampleValue> $synonyms
 */
class SlotTypeValue extends Shape
{
    /**
     * @param array{
     *     sampleValue?: SampleValue,
     *     synonyms?: list<SampleValue>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
