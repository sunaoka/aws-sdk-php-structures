<?php

namespace Sunaoka\Aws\Structures\IdentityStore\DescribeUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StreetAddress
 * @property string|null $Locality
 * @property string|null $Region
 * @property string|null $PostalCode
 * @property string|null $Country
 * @property string|null $Formatted
 * @property string|null $Type
 * @property bool|null $Primary
 */
class Address extends Shape
{
    /**
     * @param array{
     *     StreetAddress?: string|null,
     *     Locality?: string|null,
     *     Region?: string|null,
     *     PostalCode?: string|null,
     *     Country?: string|null,
     *     Formatted?: string|null,
     *     Type?: string|null,
     *     Primary?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
