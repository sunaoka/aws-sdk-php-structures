<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribePhoneNumbers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $PhoneNumberIds
 * @property list<Shapes\PhoneNumberFilter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'SELF'|'SHARED' $Owner
 */
class DescribePhoneNumbersRequest extends Request
{
    /**
     * @param array{
     *     PhoneNumberIds?: list<string>,
     *     Filters?: list<Shapes\PhoneNumberFilter>,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Owner?: 'SELF'|'SHARED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
