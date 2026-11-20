<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaignAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Selected
 * @property list<CampaignAssetLayoutOption> $Options
 */
class CampaignAssetLayout extends Shape
{
    /**
     * @param array{
     *     Selected?: string|null,
     *     Options: list<CampaignAssetLayoutOption>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
