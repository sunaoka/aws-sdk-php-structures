<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContactHandling|null $ContactHandling
 */
class ApplicationConfig extends Shape
{
    /**
     * @param array{ContactHandling?: ContactHandling|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
