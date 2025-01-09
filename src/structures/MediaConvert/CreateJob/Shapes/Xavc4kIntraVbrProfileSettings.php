<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLASS_100'|'CLASS_300'|'CLASS_480' $XavcClass
 */
class Xavc4kIntraVbrProfileSettings extends Shape
{
    /**
     * @param array{XavcClass?: 'CLASS_100'|'CLASS_300'|'CLASS_480'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
