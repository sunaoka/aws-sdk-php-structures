<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateScraper;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alias
 * @property string $clientToken
 * @property Shapes\Destination $destination
 * @property Shapes\ScrapeConfiguration $scrapeConfiguration
 * @property string $scraperId
 */
class UpdateScraperRequest extends Request
{
    /**
     * @param array{
     *     alias?: string,
     *     clientToken?: string,
     *     destination?: Shapes\Destination,
     *     scrapeConfiguration?: Shapes\ScrapeConfiguration,
     *     scraperId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
