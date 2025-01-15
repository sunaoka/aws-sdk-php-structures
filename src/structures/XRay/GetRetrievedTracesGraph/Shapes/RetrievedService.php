<?php

namespace Sunaoka\Aws\Structures\XRay\GetRetrievedTracesGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Service|null $Service
 * @property list<GraphLink>|null $Links
 */
class RetrievedService extends Shape
{
    /**
     * @param array{
     *     Service?: Service|null,
     *     Links?: list<GraphLink>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
