<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $CampaignId
 * @property string $Version
 */
class GetCampaignVersionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     CampaignId: string,
     *     Version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
