<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateScraper;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $alias
 * @property string|null $clientToken
 * @property Shapes\Destination|null $destination
 * @property Shapes\RoleConfiguration|null $roleConfiguration
 * @property Shapes\ScrapeConfiguration|null $scrapeConfiguration
 * @property string $scraperId
 */
class UpdateScraperRequest extends Request
{
    /**
     * @param array{
     *     alias?: string|null,
     *     clientToken?: string|null,
     *     destination?: Shapes\Destination|null,
     *     roleConfiguration?: Shapes\RoleConfiguration|null,
     *     scrapeConfiguration?: Shapes\ScrapeConfiguration|null,
     *     scraperId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
