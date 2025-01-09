<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateScraper;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alias
 * @property string $clientToken
 * @property Shapes\Destination $destination
 * @property Shapes\ScrapeConfiguration $scrapeConfiguration
 * @property Shapes\Source $source
 * @property array<string, string> $tags
 */
class CreateScraperRequest extends Request
{
    /**
     * @param array{
     *     alias?: string,
     *     clientToken?: string,
     *     destination: Shapes\Destination,
     *     scrapeConfiguration: Shapes\ScrapeConfiguration,
     *     source: Shapes\Source,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
