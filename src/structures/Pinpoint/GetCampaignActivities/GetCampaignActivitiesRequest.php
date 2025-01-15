<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignActivities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $CampaignId
 * @property string|null $PageSize
 * @property string|null $Token
 */
class GetCampaignActivitiesRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     CampaignId: string,
     *     PageSize?: string|null,
     *     Token?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
