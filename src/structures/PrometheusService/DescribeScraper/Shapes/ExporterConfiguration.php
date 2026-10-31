<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeScraper\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpenSearchExporterConfiguration|null $openSearchConfiguration
 * @property KafkaExporterConfiguration|null $kafkaConfiguration
 */
class ExporterConfiguration extends Shape
{
    /**
     * @param array{
     *     openSearchConfiguration?: OpenSearchExporterConfiguration|null,
     *     kafkaConfiguration?: KafkaExporterConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
