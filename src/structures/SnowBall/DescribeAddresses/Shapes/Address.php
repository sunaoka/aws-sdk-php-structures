<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AddressId
 * @property string|null $Name
 * @property string|null $Company
 * @property string|null $Street1
 * @property string|null $Street2
 * @property string|null $Street3
 * @property string|null $City
 * @property string|null $StateOrProvince
 * @property string|null $PrefectureOrDistrict
 * @property string|null $Landmark
 * @property string|null $Country
 * @property string|null $PostalCode
 * @property string|null $PhoneNumber
 * @property bool|null $IsRestricted
 * @property 'CUST_PICKUP'|'AWS_SHIP'|null $Type
 */
class Address extends Shape
{
    /**
     * @param array{
     *     AddressId?: string|null,
     *     Name?: string|null,
     *     Company?: string|null,
     *     Street1?: string|null,
     *     Street2?: string|null,
     *     Street3?: string|null,
     *     City?: string|null,
     *     StateOrProvince?: string|null,
     *     PrefectureOrDistrict?: string|null,
     *     Landmark?: string|null,
     *     Country?: string|null,
     *     PostalCode?: string|null,
     *     PhoneNumber?: string|null,
     *     IsRestricted?: bool|null,
     *     Type?: 'CUST_PICKUP'|'AWS_SHIP'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
