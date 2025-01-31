<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeScraper\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $alias
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property Destination $destination
 * @property \Aws\Api\DateTimeResult $lastModifiedAt
 * @property string $roleArn
 * @property RoleConfiguration|null $roleConfiguration
 * @property ScrapeConfiguration $scrapeConfiguration
 * @property string $scraperId
 * @property Source $source
 * @property ScraperStatus $status
 * @property string|null $statusReason
 * @property array<string, string>|null $tags
 */
class ScraperDescription extends Shape
{
    /**
     * @param array{
     *     alias?: string|null,
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     destination: Destination,
     *     lastModifiedAt: \Aws\Api\DateTimeResult,
     *     roleArn: string,
     *     roleConfiguration?: RoleConfiguration|null,
     *     scrapeConfiguration: ScrapeConfiguration,
     *     scraperId: string,
     *     source: Source,
     *     status: ScraperStatus,
     *     statusReason?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
