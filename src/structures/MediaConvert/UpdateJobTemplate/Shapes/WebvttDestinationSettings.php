<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|null $Accessibility
 * @property 'ENABLED'|'DISABLED'|'STRICT'|null $StylePassthrough
 */
class WebvttDestinationSettings extends Shape
{
    /**
     * @param array{
     *     Accessibility?: 'DISABLED'|'ENABLED'|null,
     *     StylePassthrough?: 'ENABLED'|'DISABLED'|'STRICT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
