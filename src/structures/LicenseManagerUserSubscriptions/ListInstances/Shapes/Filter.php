<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Attribute
 * @property string|null $Operation
 * @property string|null $Value
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     Attribute?: string|null,
     *     Operation?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
