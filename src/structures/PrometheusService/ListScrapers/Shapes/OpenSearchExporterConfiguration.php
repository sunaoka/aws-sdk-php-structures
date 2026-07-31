<?php

namespace Sunaoka\Aws\Structures\PrometheusService\ListScrapers\Shapes;

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
