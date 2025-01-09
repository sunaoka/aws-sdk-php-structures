<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Height
 * @property 'ENABLED'|'DISABLED' $Required
 * @property int $Width
 */
class AllowedRenditionSize extends Shape
{
    /**
     * @param array{
     *     Height?: int,
     *     Required?: 'ENABLED'|'DISABLED',
     *     Width?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
