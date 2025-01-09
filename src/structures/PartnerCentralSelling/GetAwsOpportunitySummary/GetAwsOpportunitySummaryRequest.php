<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $RelatedOpportunityIdentifier
 */
class GetAwsOpportunitySummaryRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     RelatedOpportunityIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
