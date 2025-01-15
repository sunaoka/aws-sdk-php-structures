<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CountryCode
 * @property string|null $CountryName
 */
class Country extends Shape
{
    /**
     * @param array{
     *     CountryCode?: string|null,
     *     CountryName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
