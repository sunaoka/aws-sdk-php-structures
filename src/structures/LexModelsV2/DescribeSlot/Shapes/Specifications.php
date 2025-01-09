<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $slotTypeId
 * @property SubSlotValueElicitationSetting $valueElicitationSetting
 */
class Specifications extends Shape
{
    /**
     * @param array{
     *     slotTypeId: string,
     *     valueElicitationSetting: SubSlotValueElicitationSetting
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
