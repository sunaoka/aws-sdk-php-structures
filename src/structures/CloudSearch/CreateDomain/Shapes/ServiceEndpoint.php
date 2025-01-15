<?php

namespace Sunaoka\Aws\Structures\CloudSearch\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Endpoint
 */
class ServiceEndpoint extends Shape
{
    /**
     * @param array{Endpoint?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
