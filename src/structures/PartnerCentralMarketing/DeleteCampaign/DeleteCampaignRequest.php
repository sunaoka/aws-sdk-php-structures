<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\DeleteCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $CampaignIdentifier
 */
class DeleteCampaignRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     CampaignIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
