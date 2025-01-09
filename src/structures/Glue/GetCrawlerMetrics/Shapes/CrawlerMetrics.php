<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawlerMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CrawlerName
 * @property double $TimeLeftSeconds
 * @property bool $StillEstimating
 * @property double $LastRuntimeSeconds
 * @property double $MedianRuntimeSeconds
 * @property int $TablesCreated
 * @property int $TablesUpdated
 * @property int $TablesDeleted
 */
class CrawlerMetrics extends Shape
{
    /**
     * @param array{
     *     CrawlerName?: string,
     *     TimeLeftSeconds?: double,
     *     StillEstimating?: bool,
     *     LastRuntimeSeconds?: double,
     *     MedianRuntimeSeconds?: double,
     *     TablesCreated?: int,
     *     TablesUpdated?: int,
     *     TablesDeleted?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
