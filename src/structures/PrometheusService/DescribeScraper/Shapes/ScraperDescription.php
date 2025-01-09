<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeScraper\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $alias
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property Destination $destination
 * @property \Aws\Api\DateTimeResult $lastModifiedAt
 * @property string $roleArn
 * @property ScrapeConfiguration $scrapeConfiguration
 * @property string $scraperId
 * @property Source $source
 * @property ScraperStatus $status
 * @property string $statusReason
 * @property array<string, string> $tags
 */
class ScraperDescription extends Shape
{
    /**
     * @param array{
     *     alias?: string,
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     destination: Destination,
     *     lastModifiedAt: \Aws\Api\DateTimeResult,
     *     roleArn: string,
     *     scrapeConfiguration: ScrapeConfiguration,
     *     scraperId: string,
     *     source: Source,
     *     status: ScraperStatus,
     *     statusReason?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
