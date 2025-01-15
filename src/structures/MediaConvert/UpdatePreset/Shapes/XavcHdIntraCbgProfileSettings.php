<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLASS_50'|'CLASS_100'|'CLASS_200'|null $XavcClass
 */
class XavcHdIntraCbgProfileSettings extends Shape
{
    /**
     * @param array{XavcClass?: 'CLASS_50'|'CLASS_100'|'CLASS_200'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
