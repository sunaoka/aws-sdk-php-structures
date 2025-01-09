<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpenSearchResourceConfig $openSearchResourceConfig
 */
class ResourceConfig extends Shape
{
    /**
     * @param array{openSearchResourceConfig?: OpenSearchResourceConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
