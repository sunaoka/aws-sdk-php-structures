<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateScraper;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $scraperId
 * @property string $arn
 * @property Shapes\ScraperStatus $status
 * @property array<string, string>|null $tags
 */
class CreateScraperResponse extends Response
{
}
