<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateDataProtectionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $redactionPlaceHolderText
 * @property 'CustomText' $redactionPlaceHolderType
 */
class RedactionPlaceHolder extends Shape
{
    /**
     * @param array{
     *     redactionPlaceHolderText?: string,
     *     redactionPlaceHolderType: 'CustomText'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
