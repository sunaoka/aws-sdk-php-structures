<?php

namespace Sunaoka\Aws\Structures\Chime\SearchAvailablePhoneNumbers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AreaCode
 * @property string|null $City
 * @property string|null $Country
 * @property string|null $State
 * @property string|null $TollFreePrefix
 * @property 'Local'|'TollFree'|null $PhoneNumberType
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class SearchAvailablePhoneNumbersRequest extends Request
{
    /**
     * @param array{
     *     AreaCode?: string|null,
     *     City?: string|null,
     *     Country?: string|null,
     *     State?: string|null,
     *     TollFreePrefix?: string|null,
     *     PhoneNumberType?: 'Local'|'TollFree'|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
