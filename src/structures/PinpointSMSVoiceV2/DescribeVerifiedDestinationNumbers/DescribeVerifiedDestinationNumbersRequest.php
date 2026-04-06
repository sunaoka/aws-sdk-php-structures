<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeVerifiedDestinationNumbers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $VerifiedDestinationNumberIds
 * @property list<string>|null $DestinationPhoneNumbers
 * @property list<Shapes\VerifiedDestinationNumberFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeVerifiedDestinationNumbersRequest extends Request
{
    /**
     * @param array{
     *     VerifiedDestinationNumberIds?: list<string>|null,
     *     DestinationPhoneNumbers?: list<string>|null,
     *     Filters?: list<Shapes\VerifiedDestinationNumberFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
