<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateScraper;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $scraperId
 * @property Shapes\ScraperStatus $status
 * @property array<string, string> $tags
 */
class CreateScraperResponse extends Response
{
}
