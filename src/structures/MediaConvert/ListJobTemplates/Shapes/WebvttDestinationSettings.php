<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|null $Accessibility
 * @property 'ENABLED'|'DISABLED'|'STRICT'|'MERGE'|null $StylePassthrough
 */
class WebvttDestinationSettings extends Shape
{
    /**
     * @param array{
     *     Accessibility?: 'DISABLED'|'ENABLED'|null,
     *     StylePassthrough?: 'ENABLED'|'DISABLED'|'STRICT'|'MERGE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
