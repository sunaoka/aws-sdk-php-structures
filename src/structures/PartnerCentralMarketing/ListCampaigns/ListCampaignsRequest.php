<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\ListCampaigns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property list<string>|null $CampaignIdentifiers
 * @property string|null $Name
 * @property list<'DRAFT'|'ACTIVE'|'COMPLETED'>|null $States
 * @property Shapes\CampaignSort|null $Sort
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListCampaignsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     CampaignIdentifiers?: list<string>|null,
     *     Name?: string|null,
     *     States?: list<'DRAFT'|'ACTIVE'|'COMPLETED'>|null,
     *     Sort?: Shapes\CampaignSort|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
