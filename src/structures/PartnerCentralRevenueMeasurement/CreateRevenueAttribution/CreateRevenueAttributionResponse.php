<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\CreateRevenueAttribution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Id
 * @property string $Arn
 * @property string|null $Name
 * @property string|null $Description
 * @property 'MULTI_TENANT'|'SINGLE_TENANT' $TenancyModel
 * @property Shapes\MarketplaceProductSummary|null $MarketplaceProduct
 * @property string|null $Revision
 */
class CreateRevenueAttributionResponse extends Response
{
}
