<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawlerMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CrawlerName
 * @property double $TimeLeftSeconds
 * @property bool $StillEstimating
 * @property double $LastRuntimeSeconds
 * @property double $MedianRuntimeSeconds
 * @property int<0, max> $TablesCreated
 * @property int<0, max> $TablesUpdated
 * @property int<0, max> $TablesDeleted
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
     *     TablesCreated?: int<0, max>,
     *     TablesUpdated?: int<0, max>,
     *     TablesDeleted?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
