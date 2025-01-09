<?php

namespace Sunaoka\Aws\Structures\Chime\SearchAvailablePhoneNumbers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AreaCode
 * @property string $City
 * @property string $Country
 * @property string $State
 * @property string $TollFreePrefix
 * @property 'Local'|'TollFree' $PhoneNumberType
 * @property int<1, 500> $MaxResults
 * @property string $NextToken
 */
class SearchAvailablePhoneNumbersRequest extends Request
{
    /**
     * @param array{
     *     AreaCode?: string,
     *     City?: string,
     *     Country?: string,
     *     State?: string,
     *     TollFreePrefix?: string,
     *     PhoneNumberType?: 'Local'|'TollFree',
     *     MaxResults?: int<1, 500>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
