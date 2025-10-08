<?php

namespace Sunaoka\Aws\Structures\MarketplaceCommerceAnalytics;

class MarketplaceCommerceAnalyticsClient extends \Aws\MarketplaceCommerceAnalytics\MarketplaceCommerceAnalyticsClient
{
    use GenerateDataSet\GenerateDataSetTrait;
    use StartSupportDataExport\StartSupportDataExportTrait;
}
