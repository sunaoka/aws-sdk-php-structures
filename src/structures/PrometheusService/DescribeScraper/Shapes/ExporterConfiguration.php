<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeScraper\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpenSearchExporterConfiguration|null $openSearchConfiguration
 */
class ExporterConfiguration extends Shape
{
    /**
     * @param array{openSearchConfiguration?: OpenSearchExporterConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
