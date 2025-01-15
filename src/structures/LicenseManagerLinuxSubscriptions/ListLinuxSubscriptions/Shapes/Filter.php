<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\ListLinuxSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'Equal'|'NotEqual'|'Contains'|null $Operator
 * @property list<string>|null $Values
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Operator?: 'Equal'|'NotEqual'|'Contains'|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
