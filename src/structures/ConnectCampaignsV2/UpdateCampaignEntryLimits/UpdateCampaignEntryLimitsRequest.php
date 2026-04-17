<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignEntryLimits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property Shapes\EntryLimitsConfig $entryLimitsConfig
 */
class UpdateCampaignEntryLimitsRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     entryLimitsConfig: Shapes\EntryLimitsConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
