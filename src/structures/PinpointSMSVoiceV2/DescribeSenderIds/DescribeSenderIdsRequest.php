<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeSenderIds;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\SenderIdAndCountry>|null $SenderIds
 * @property list<Shapes\SenderIdFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeSenderIdsRequest extends Request
{
    /**
     * @param array{
     *     SenderIds?: list<Shapes\SenderIdAndCountry>|null,
     *     Filters?: list<Shapes\SenderIdFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
