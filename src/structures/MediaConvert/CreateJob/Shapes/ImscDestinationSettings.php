<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED' $Accessibility
 * @property 'ENABLED'|'DISABLED' $StylePassthrough
 */
class ImscDestinationSettings extends Shape
{
    /**
     * @param array{
     *     Accessibility?: 'DISABLED'|'ENABLED',
     *     StylePassthrough?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
