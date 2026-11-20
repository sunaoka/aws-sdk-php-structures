<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\StartCampaignAssetActivationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $CampaignIdentifier
 * @property list<string> $CampaignAssetIdentifiers
 * @property string|null $ClientToken
 */
class StartCampaignAssetActivationTaskRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     CampaignIdentifier: string,
     *     CampaignAssetIdentifiers: list<string>,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
