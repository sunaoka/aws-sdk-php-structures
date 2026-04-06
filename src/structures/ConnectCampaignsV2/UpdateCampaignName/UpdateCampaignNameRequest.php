<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $name
 */
class UpdateCampaignNameRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
