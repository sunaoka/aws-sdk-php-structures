<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property Shapes\Source $source
 */
class UpdateCampaignSourceRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     source: Shapes\Source
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
