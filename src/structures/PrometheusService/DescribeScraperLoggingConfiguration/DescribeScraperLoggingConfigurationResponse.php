<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeScraperLoggingConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ScraperLoggingConfigurationStatus $status
 * @property string $scraperId
 * @property Shapes\ScraperLoggingDestination $loggingDestination
 * @property list<Shapes\ScraperComponent> $scraperComponents
 * @property \Aws\Api\DateTimeResult $modifiedAt
 */
class DescribeScraperLoggingConfigurationResponse extends Response
{
}
