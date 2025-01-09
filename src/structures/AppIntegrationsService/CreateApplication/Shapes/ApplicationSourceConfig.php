<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExternalUrlConfig $ExternalUrlConfig
 */
class ApplicationSourceConfig extends Shape
{
    /**
     * @param array{ExternalUrlConfig?: ExternalUrlConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
