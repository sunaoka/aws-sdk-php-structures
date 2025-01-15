<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Address1
 * @property string|null $Address2
 * @property string|null $Address3
 * @property string|null $Address4
 * @property string|null $City
 * @property string|null $County
 * @property string|null $State
 * @property string|null $Province
 * @property string|null $Country
 * @property string|null $PostalCode
 */
class Address extends Shape
{
    /**
     * @param array{
     *     Address1?: string|null,
     *     Address2?: string|null,
     *     Address3?: string|null,
     *     Address4?: string|null,
     *     City?: string|null,
     *     County?: string|null,
     *     State?: string|null,
     *     Province?: string|null,
     *     Country?: string|null,
     *     PostalCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
