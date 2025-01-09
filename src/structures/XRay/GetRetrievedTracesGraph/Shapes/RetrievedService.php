<?php

namespace Sunaoka\Aws\Structures\XRay\GetRetrievedTracesGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Service $Service
 * @property list<GraphLink> $Links
 */
class RetrievedService extends Shape
{
    /**
     * @param array{
     *     Service?: Service,
     *     Links?: list<GraphLink>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
