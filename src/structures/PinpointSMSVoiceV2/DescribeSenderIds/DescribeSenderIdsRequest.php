<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeSenderIds;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\SenderIdAndCountry> $SenderIds
 * @property list<Shapes\SenderIdFilter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'SELF'|'SHARED' $Owner
 */
class DescribeSenderIdsRequest extends Request
{
    /**
     * @param array{
     *     SenderIds?: list<Shapes\SenderIdAndCountry>,
     *     Filters?: list<Shapes\SenderIdFilter>,
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
