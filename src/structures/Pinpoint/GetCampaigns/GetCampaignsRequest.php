<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaigns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $PageSize
 * @property string $Token
 */
class GetCampaignsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     PageSize?: string,
     *     Token?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
