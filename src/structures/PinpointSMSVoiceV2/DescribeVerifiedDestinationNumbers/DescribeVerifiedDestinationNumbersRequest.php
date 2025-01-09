<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeVerifiedDestinationNumbers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $VerifiedDestinationNumberIds
 * @property list<string> $DestinationPhoneNumbers
 * @property list<Shapes\VerifiedDestinationNumberFilter> $Filters
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class DescribeVerifiedDestinationNumbersRequest extends Request
{
    /**
     * @param array{
     *     VerifiedDestinationNumberIds?: list<string>,
     *     DestinationPhoneNumbers?: list<string>,
     *     Filters?: list<Shapes\VerifiedDestinationNumberFilter>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
