<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CountryCode
 * @property string $CountryName
 */
class Country extends Shape
{
    /**
     * @param array{
     *     CountryCode?: string,
     *     CountryName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
