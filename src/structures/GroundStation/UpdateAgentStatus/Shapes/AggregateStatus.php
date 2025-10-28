<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateAgentStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCESS'|'FAILED'|'ACTIVE'|'INACTIVE' $status
 * @property array<string, bool>|null $signatureMap
 */
class AggregateStatus extends Shape
{
    /**
     * @param array{
     *     status: 'SUCCESS'|'FAILED'|'ACTIVE'|'INACTIVE',
     *     signatureMap?: array<string, bool>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
