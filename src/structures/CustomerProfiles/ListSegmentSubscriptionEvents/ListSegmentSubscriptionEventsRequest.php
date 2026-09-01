<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListSegmentSubscriptionEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $SegmentDefinitionName
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListSegmentSubscriptionEventsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     SegmentDefinitionName: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
