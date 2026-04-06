<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateScraperLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SERVICE_DISCOVERY'|'COLLECTOR'|'EXPORTER' $type
 * @property ComponentConfig|null $config
 */
class ScraperComponent extends Shape
{
    /**
     * @param array{
     *     type: 'SERVICE_DISCOVERY'|'COLLECTOR'|'EXPORTER',
     *     config?: ComponentConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
