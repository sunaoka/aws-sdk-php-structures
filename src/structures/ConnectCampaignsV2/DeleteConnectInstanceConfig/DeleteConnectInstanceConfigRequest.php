<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DeleteConnectInstanceConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectInstanceId
 * @property 'RETAIN_ALL'|'DELETE_ALL' $campaignDeletionPolicy
 */
class DeleteConnectInstanceConfigRequest extends Request
{
    /**
     * @param array{
     *     connectInstanceId: string,
     *     campaignDeletionPolicy?: 'RETAIN_ALL'|'DELETE_ALL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
