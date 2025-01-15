<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<32, 8192>|null $Height
 * @property 'ENABLED'|'DISABLED'|null $Required
 * @property int<32, 8192>|null $Width
 */
class AllowedRenditionSize extends Shape
{
    /**
     * @param array{
     *     Height?: int<32, 8192>|null,
     *     Required?: 'ENABLED'|'DISABLED'|null,
     *     Width?: int<32, 8192>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
