<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|null $Accessibility
 * @property 'ENABLED'|'DISABLED'|null $StylePassthrough
 */
class ImscDestinationSettings extends Shape
{
    /**
     * @param array{
     *     Accessibility?: 'DISABLED'|'ENABLED'|null,
     *     StylePassthrough?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
