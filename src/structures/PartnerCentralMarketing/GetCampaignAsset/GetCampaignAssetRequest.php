<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaignAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $CampaignIdentifier
 * @property string $CampaignAssetIdentifier
 */
class GetCampaignAssetRequest extends Request
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
