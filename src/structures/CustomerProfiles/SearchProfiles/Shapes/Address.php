<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\SearchProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Address1
 * @property string $Address2
 * @property string $Address3
 * @property string $Address4
 * @property string $City
 * @property string $County
 * @property string $State
 * @property string $Province
 * @property string $Country
 * @property string $PostalCode
 */
class Address extends Shape
{
    /**
     * @param array{
     *     Address1?: string,
     *     Address2?: string,
     *     Address3?: string,
     *     Address4?: string,
     *     City?: string,
     *     County?: string,
     *     State?: string,
     *     Province?: string,
     *     Country?: string,
     *     PostalCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
