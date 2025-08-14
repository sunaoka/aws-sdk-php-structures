<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\DisassociateOpportunity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $OpportunityIdentifier
 * @property 'Solutions'|'AwsProducts'|'AwsMarketplaceOffers' $RelatedEntityType
 * @property string $RelatedEntityIdentifier
 */
class DisassociateOpportunityRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     OpportunityIdentifier: string,
     *     RelatedEntityType: 'Solutions'|'AwsProducts'|'AwsMarketplaceOffers',
     *     RelatedEntityIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
