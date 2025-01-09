<?php

namespace Sunaoka\Aws\Structures\SesV2\ListDomainDeliverabilityCampaigns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property \Aws\Api\DateTimeResult $EndDate
 * @property string $SubscribedDomain
 * @property string $NextToken
 * @property int $PageSize
 */
class ListDomainDeliverabilityCampaignsRequest extends Request
{
    /**
     * @param array{
     *     StartDate: \Aws\Api\DateTimeResult,
     *     EndDate: \Aws\Api\DateTimeResult,
     *     SubscribedDomain: string,
     *     NextToken?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
