<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\CreateMarketplaceRevenueShare;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ProductId
 * @property string $Arn
 * @property 'AWS'|'Sandbox'|null $Catalog
 * @property string|null $ProductCode
 * @property string|null $ProductName
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property int<1, max>|null $Revision
 */
class CreateMarketplaceRevenueShareResponse extends Response
{
}
