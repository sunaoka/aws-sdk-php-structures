<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateScraper;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scraperId
 * @property string|null $alias
 * @property Shapes\ScrapeConfiguration|null $scrapeConfiguration
 * @property Shapes\Destination|null $destination
 * @property Shapes\RoleConfiguration|null $roleConfiguration
 * @property string|null $clientToken
 */
class UpdateScraperRequest extends Request
{
    /**
     * @param array{
     *     scraperId: string,
     *     alias?: string|null,
     *     scrapeConfiguration?: Shapes\ScrapeConfiguration|null,
     *     destination?: Shapes\Destination|null,
     *     roleConfiguration?: Shapes\RoleConfiguration|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
