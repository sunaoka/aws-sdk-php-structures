<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $CampaignId
 * @property string $PageSize
 * @property string $Token
 */
class GetCampaignVersionsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     CampaignId: string,
     *     PageSize?: string,
     *     Token?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
