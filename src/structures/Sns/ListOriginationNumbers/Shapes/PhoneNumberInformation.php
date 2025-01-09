<?php

namespace Sunaoka\Aws\Structures\Sns\ListOriginationNumbers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $PhoneNumber
 * @property string $Status
 * @property string $Iso2CountryCode
 * @property 'Transactional'|'Promotional'|'Premium' $RouteType
 * @property list<'SMS'|'MMS'|'VOICE'> $NumberCapabilities
 */
class PhoneNumberInformation extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     PhoneNumber?: string,
     *     Status?: string,
     *     Iso2CountryCode?: string,
     *     RouteType?: 'Transactional'|'Promotional'|'Premium',
     *     NumberCapabilities?: list<'SMS'|'MMS'|'VOICE'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
