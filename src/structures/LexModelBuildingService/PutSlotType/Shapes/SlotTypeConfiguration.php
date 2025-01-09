<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutSlotType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SlotTypeRegexConfiguration $regexConfiguration
 */
class SlotTypeConfiguration extends Shape
{
    /**
     * @param array{regexConfiguration?: SlotTypeRegexConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
