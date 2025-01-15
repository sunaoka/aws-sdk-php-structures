<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 * @property string|null $Name
 * @property string|null $OverrideValue
 * @property string|null $Value
 */
class ServiceOverride extends Shape
{
    /**
     * @param array{
     *     Message?: string|null,
     *     Name?: string|null,
     *     OverrideValue?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
