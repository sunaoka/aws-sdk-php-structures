<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\AssociateOpportunity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $OpportunityIdentifier
 * @property string $RelatedEntityIdentifier
 * @property 'Solutions'|'AwsProducts'|'AwsMarketplaceOffers' $RelatedEntityType
 */
class AssociateOpportunityRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     OpportunityIdentifier: string,
     *     RelatedEntityIdentifier: string,
     *     RelatedEntityType: 'Solutions'|'AwsProducts'|'AwsMarketplaceOffers'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
