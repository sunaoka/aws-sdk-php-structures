<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpenSearchResourceConfig|null $openSearchResourceConfig
 */
class ResourceConfig extends Shape
{
    /**
     * @param array{openSearchResourceConfig?: OpenSearchResourceConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
