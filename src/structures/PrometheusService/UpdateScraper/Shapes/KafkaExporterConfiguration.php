<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateScraper\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clusterArn
 * @property string|null $topicFilter
 * @property string|null $consumerGroupFilter
 */
class KafkaExporterConfiguration extends Shape
{
    /**
     * @param array{
     *     clusterArn: string,
     *     topicFilter?: string|null,
     *     consumerGroupFilter?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
