<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 * @property string $Name
 * @property string $OverrideValue
 * @property string $Value
 */
class ServiceOverride extends Shape
{
    /**
     * @param array{
     *     Message?: string,
     *     Name?: string,
     *     OverrideValue?: string,
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
