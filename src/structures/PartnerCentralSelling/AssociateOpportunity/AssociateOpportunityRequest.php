<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\AssociateOpportunity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $OpportunityIdentifier
 * @property 'Solutions'|'AwsProducts'|'AwsMarketplaceOffers'|'AwsMarketplaceOfferSets' $RelatedEntityType
 * @property string $RelatedEntityIdentifier
 */
class AssociateOpportunityRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     OpportunityIdentifier: string,
     *     RelatedEntityType: 'Solutions'|'AwsProducts'|'AwsMarketplaceOffers'|'AwsMarketplaceOfferSets',
     *     RelatedEntityIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
