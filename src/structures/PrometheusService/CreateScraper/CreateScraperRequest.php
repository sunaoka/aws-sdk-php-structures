<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateScraper;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $alias
 * @property string|null $clientToken
 * @property Shapes\Destination $destination
 * @property Shapes\ScrapeConfiguration $scrapeConfiguration
 * @property Shapes\Source $source
 * @property array<string, string>|null $tags
 */
class CreateScraperRequest extends Request
{
    /**
     * @param array{
     *     alias?: string|null,
     *     clientToken?: string|null,
     *     destination: Shapes\Destination,
     *     scrapeConfiguration: Shapes\ScrapeConfiguration,
     *     source: Shapes\Source,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
