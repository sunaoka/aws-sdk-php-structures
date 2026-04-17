<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignEntryLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $maxEntryCount
 * @property string $minEntryInterval
 */
class EntryLimitsConfig extends Shape
{
    /**
     * @param array{
     *     maxEntryCount: int<0, max>,
     *     minEntryInterval: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
