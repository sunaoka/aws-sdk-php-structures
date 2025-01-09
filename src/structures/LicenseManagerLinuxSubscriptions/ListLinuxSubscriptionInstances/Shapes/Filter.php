<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\ListLinuxSubscriptionInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'Equal'|'NotEqual'|'Contains' $Operator
 * @property list<string> $Values
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Operator?: 'Equal'|'NotEqual'|'Contains',
     *     Values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
