<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchCustomerAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Catalog
 * @property 'PENDING'|'ENRICHED'|'NO_MATCH_FOUND'|'ACTION_REQUIRED' $EnrichmentStatus
 * @property string|null $PartnerAccountIdentifier
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property CustomerAccountDetailsSummary $CustomerAccount
 * @property AwsEnrichmentSummary|null $AwsEnrichment
 */
class CustomerAccountSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Id: string,
     *     Catalog: string,
     *     EnrichmentStatus: 'PENDING'|'ENRICHED'|'NO_MATCH_FOUND'|'ACTION_REQUIRED',
     *     PartnerAccountIdentifier?: string|null,
     *     CreatedDate: \Aws\Api\DateTimeResult,
     *     LastModifiedDate: \Aws\Api\DateTimeResult,
     *     CustomerAccount: CustomerAccountDetailsSummary,
     *     AwsEnrichment?: AwsEnrichmentSummary|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
