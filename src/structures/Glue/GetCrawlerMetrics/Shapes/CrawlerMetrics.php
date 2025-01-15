<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawlerMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CrawlerName
 * @property double|null $TimeLeftSeconds
 * @property bool|null $StillEstimating
 * @property double|null $LastRuntimeSeconds
 * @property double|null $MedianRuntimeSeconds
 * @property int<0, max>|null $TablesCreated
 * @property int<0, max>|null $TablesUpdated
 * @property int<0, max>|null $TablesDeleted
 */
class CrawlerMetrics extends Shape
{
    /**
     * @param array{
     *     CrawlerName?: string|null,
     *     TimeLeftSeconds?: double|null,
     *     StillEstimating?: bool|null,
     *     LastRuntimeSeconds?: double|null,
     *     MedianRuntimeSeconds?: double|null,
     *     TablesCreated?: int<0, max>|null,
     *     TablesUpdated?: int<0, max>|null,
     *     TablesDeleted?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
