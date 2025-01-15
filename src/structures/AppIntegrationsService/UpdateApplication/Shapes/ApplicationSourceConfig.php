<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExternalUrlConfig|null $ExternalUrlConfig
 */
class ApplicationSourceConfig extends Shape
{
    /**
     * @param array{ExternalUrlConfig?: ExternalUrlConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
