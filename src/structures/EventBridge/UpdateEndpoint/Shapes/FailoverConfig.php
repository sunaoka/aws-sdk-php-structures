<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Primary $Primary
 * @property Secondary $Secondary
 */
class FailoverConfig extends Shape
{
    /**
     * @param array{
     *     Primary: Primary,
     *     Secondary: Secondary
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
