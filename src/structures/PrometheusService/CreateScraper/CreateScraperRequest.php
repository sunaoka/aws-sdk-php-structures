<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateScraper;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $alias
 * @property Shapes\ScrapeConfiguration $scrapeConfiguration
 * @property Shapes\Source $source
 * @property Shapes\Destination $destination
 * @property Shapes\RoleConfiguration|null $roleConfiguration
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateScraperRequest extends Request
{
    /**
     * @param array{
     *     alias?: string|null,
     *     scrapeConfiguration: Shapes\ScrapeConfiguration,
     *     source: Shapes\Source,
     *     destination: Shapes\Destination,
     *     roleConfiguration?: Shapes\RoleConfiguration|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
