<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeScraper\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $alias
 * @property string $scraperId
 * @property string $arn
 * @property string $roleArn
 * @property ScraperStatus $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastModifiedAt
 * @property array<string, string>|null $tags
 * @property string|null $statusReason
 * @property ScrapeConfiguration $scrapeConfiguration
 * @property Source $source
 * @property Destination $destination
 * @property RoleConfiguration|null $roleConfiguration
 */
class ScraperDescription extends Shape
{
    /**
     * @param array{
     *     alias?: string|null,
     *     scraperId: string,
     *     arn: string,
     *     roleArn: string,
     *     status: ScraperStatus,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastModifiedAt: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>|null,
     *     statusReason?: string|null,
     *     scrapeConfiguration: ScrapeConfiguration,
     *     source: Source,
     *     destination: Destination,
     *     roleConfiguration?: RoleConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
