<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeScraper\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainArn
 */
class OpenSearchExporterConfiguration extends Shape
{
    /**
     * @param array{domainArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
