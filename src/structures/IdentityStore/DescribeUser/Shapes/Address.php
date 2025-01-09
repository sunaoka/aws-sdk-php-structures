<?php

namespace Sunaoka\Aws\Structures\IdentityStore\DescribeUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreetAddress
 * @property string $Locality
 * @property string $Region
 * @property string $PostalCode
 * @property string $Country
 * @property string $Formatted
 * @property string $Type
 * @property bool $Primary
 */
class Address extends Shape
{
    /**
     * @param array{
     *     StreetAddress?: string,
     *     Locality?: string,
     *     Region?: string,
     *     PostalCode?: string,
     *     Country?: string,
     *     Formatted?: string,
     *     Type?: string,
     *     Primary?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
