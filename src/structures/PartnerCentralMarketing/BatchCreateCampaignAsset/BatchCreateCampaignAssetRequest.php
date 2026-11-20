<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\BatchCreateCampaignAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $CampaignIdentifier
 * @property list<Shapes\BatchCreateCampaignAssetEntry> $Entries
 */
class BatchCreateCampaignAssetRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     CampaignIdentifier: string,
     *     Entries: list<Shapes\BatchCreateCampaignAssetEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
