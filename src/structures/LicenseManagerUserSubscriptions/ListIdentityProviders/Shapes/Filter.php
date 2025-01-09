<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListIdentityProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Attribute
 * @property string $Operation
 * @property string $Value
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     Attribute?: string,
     *     Operation?: string,
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
