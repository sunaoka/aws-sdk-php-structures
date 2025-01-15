<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\ListDomainDeliverabilityCampaigns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property \Aws\Api\DateTimeResult $EndDate
 * @property string $SubscribedDomain
 * @property string|null $NextToken
 * @property int|null $PageSize
 */
class ListDomainDeliverabilityCampaignsRequest extends Request
{
    /**
     * @param array{
     *     StartDate: \Aws\Api\DateTimeResult,
     *     EndDate: \Aws\Api\DateTimeResult,
     *     SubscribedDomain: string,
     *     NextToken?: string|null,
     *     PageSize?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
