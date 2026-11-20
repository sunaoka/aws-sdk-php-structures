<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaignAssetExportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $CampaignIdentifier
 * @property string $CampaignAssetExportTaskIdentifier
 */
class GetCampaignAssetExportTaskRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     CampaignIdentifier: string,
     *     CampaignAssetExportTaskIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
