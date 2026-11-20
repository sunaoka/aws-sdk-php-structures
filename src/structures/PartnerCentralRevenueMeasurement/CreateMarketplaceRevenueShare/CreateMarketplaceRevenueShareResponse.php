<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\CreateMarketplaceRevenueShare;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Id
 * @property string $Arn
 * @property 'AWS'|'Sandbox' $Catalog
 * @property list<Shapes\MarketplaceRevenueShareProductSummary> $Products
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $Revision
 */
class CreateMarketplaceRevenueShareResponse extends Response
{
}
