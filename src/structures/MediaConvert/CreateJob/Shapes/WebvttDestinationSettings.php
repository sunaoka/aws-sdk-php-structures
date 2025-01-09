<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED' $Accessibility
 * @property 'ENABLED'|'DISABLED'|'STRICT' $StylePassthrough
 */
class WebvttDestinationSettings extends Shape
{
    /**
     * @param array{
     *     Accessibility?: 'DISABLED'|'ENABLED',
     *     StylePassthrough?: 'ENABLED'|'DISABLED'|'STRICT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
