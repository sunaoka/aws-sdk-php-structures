<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\DeactivateCampaignAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $CampaignIdentifier
 * @property string $CampaignAssetIdentifier
 */
class DeactivateCampaignAssetRequest extends Request
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
