<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<32, 8192> $Height
 * @property 'ENABLED'|'DISABLED' $Required
 * @property int<32, 8192> $Width
 */
class AllowedRenditionSize extends Shape
{
    /**
     * @param array{
     *     Height?: int<32, 8192>,
     *     Required?: 'ENABLED'|'DISABLED',
     *     Width?: int<32, 8192>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
