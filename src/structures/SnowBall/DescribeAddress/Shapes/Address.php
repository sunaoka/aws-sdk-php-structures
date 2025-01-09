<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeAddress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AddressId
 * @property string $Name
 * @property string $Company
 * @property string $Street1
 * @property string $Street2
 * @property string $Street3
 * @property string $City
 * @property string $StateOrProvince
 * @property string $PrefectureOrDistrict
 * @property string $Landmark
 * @property string $Country
 * @property string $PostalCode
 * @property string $PhoneNumber
 * @property bool $IsRestricted
 * @property 'CUST_PICKUP'|'AWS_SHIP' $Type
 */
class Address extends Shape
{
    /**
     * @param array{
     *     AddressId?: string,
     *     Name?: string,
     *     Company?: string,
     *     Street1?: string,
     *     Street2?: string,
     *     Street3?: string,
     *     City?: string,
     *     StateOrProvince?: string,
     *     PrefectureOrDistrict?: string,
     *     Landmark?: string,
     *     Country?: string,
     *     PostalCode?: string,
     *     PhoneNumber?: string,
     *     IsRestricted?: bool,
     *     Type?: 'CUST_PICKUP'|'AWS_SHIP'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
