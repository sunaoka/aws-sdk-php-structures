<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateDataProtectionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CustomText' $redactionPlaceHolderType
 * @property string|null $redactionPlaceHolderText
 */
class RedactionPlaceHolder extends Shape
{
    /**
     * @param array{
     *     redactionPlaceHolderType: 'CustomText',
     *     redactionPlaceHolderText?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
