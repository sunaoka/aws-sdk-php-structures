<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\GetEventIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Source
 */
class EventFilter extends Shape
{
    /**
     * @param array{Source: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
