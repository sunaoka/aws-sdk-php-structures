<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateScraper;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $scraperId
 * @property Shapes\ScraperStatus $status
 * @property array<string, string>|null $tags
 */
class UpdateScraperResponse extends Response
{
}
