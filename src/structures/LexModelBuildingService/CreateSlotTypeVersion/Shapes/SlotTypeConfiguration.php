<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\CreateSlotTypeVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SlotTypeRegexConfiguration|null $regexConfiguration
 */
class SlotTypeConfiguration extends Shape
{
    /**
     * @param array{regexConfiguration?: SlotTypeRegexConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
