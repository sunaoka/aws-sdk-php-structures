<?php

namespace Sunaoka\Aws\Structures\Sns\ListOriginationNumbers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $PhoneNumber
 * @property string|null $Status
 * @property string|null $Iso2CountryCode
 * @property 'Transactional'|'Promotional'|'Premium'|null $RouteType
 * @property list<'SMS'|'MMS'|'VOICE'>|null $NumberCapabilities
 */
class PhoneNumberInformation extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     PhoneNumber?: string|null,
     *     Status?: string|null,
     *     Iso2CountryCode?: string|null,
     *     RouteType?: 'Transactional'|'Promotional'|'Premium'|null,
     *     NumberCapabilities?: list<'SMS'|'MMS'|'VOICE'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
