<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\UpdateCampaignAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Text
 * @property string|null $ImageReference
 * @property string|null $LinkedAssetId
 * @property CampaignAssetImageSource|null $CampaignAssetImage
 */
class TemplateFieldValue extends Shape
{
    /**
     * @param array{
     *     Text?: string|null,
     *     ImageReference?: string|null,
     *     LinkedAssetId?: string|null,
     *     CampaignAssetImage?: CampaignAssetImageSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
