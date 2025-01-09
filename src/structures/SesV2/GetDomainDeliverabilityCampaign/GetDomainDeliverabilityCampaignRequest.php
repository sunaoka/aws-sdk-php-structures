<?php

namespace Sunaoka\Aws\Structures\SesV2\GetDomainDeliverabilityCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CampaignId
 */
class GetDomainDeliverabilityCampaignRequest extends Request
{
    /**
     * @param array{CampaignId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
