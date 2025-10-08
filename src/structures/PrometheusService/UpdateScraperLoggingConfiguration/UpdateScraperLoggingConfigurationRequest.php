<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateScraperLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scraperId
 * @property Shapes\ScraperLoggingDestination $loggingDestination
 * @property list<Shapes\ScraperComponent>|null $scraperComponents
 */
class UpdateScraperLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     scraperId: string,
     *     loggingDestination: Shapes\ScraperLoggingDestination,
     *     scraperComponents?: list<Shapes\ScraperComponent>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
