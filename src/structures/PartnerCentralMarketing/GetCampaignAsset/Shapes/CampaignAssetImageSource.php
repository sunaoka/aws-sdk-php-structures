<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaignAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CampaignIdentifier
 * @property string $CampaignAssetIdentifier
 * @property string $FieldId
 */
class CampaignAssetImageSource extends Shape
{
    /**
     * @param array{
     *     CampaignIdentifier: string,
     *     CampaignAssetIdentifier: string,
     *     FieldId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
