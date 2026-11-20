<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\DeleteCampaignAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $CampaignIdentifier
 * @property string $CampaignAssetIdentifier
 */
class DeleteCampaignAssetRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     CampaignIdentifier: string,
     *     CampaignAssetIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
