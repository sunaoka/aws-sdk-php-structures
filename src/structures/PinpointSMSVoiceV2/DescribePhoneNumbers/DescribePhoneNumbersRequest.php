<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribePhoneNumbers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $PhoneNumberIds
 * @property list<Shapes\PhoneNumberFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'SELF'|'SHARED'|null $Owner
 */
class DescribePhoneNumbersRequest extends Request
{
    /**
     * @param array{
     *     PhoneNumberIds?: list<string>|null,
     *     Filters?: list<Shapes\PhoneNumberFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     Owner?: 'SELF'|'SHARED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
