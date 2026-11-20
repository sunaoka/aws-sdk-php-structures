<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\BatchCreateCampaignAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceAssetTemplateId
 * @property string $Id
 * @property CampaignAssetLayout|null $Layout
 */
class BatchCreateCampaignAssetResult extends Shape
{
    /**
     * @param array{
     *     SourceAssetTemplateId: string,
     *     Id: string,
     *     Layout?: CampaignAssetLayout|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
