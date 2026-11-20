<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaignAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CampaignAssetTemplateField $Field
 * @property TemplateFieldValue|null $Value
 */
class CampaignAssetFieldValue extends Shape
{
    /**
     * @param array{
     *     Field: CampaignAssetTemplateField,
     *     Value?: TemplateFieldValue|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
