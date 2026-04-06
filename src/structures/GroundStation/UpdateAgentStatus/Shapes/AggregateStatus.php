<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateAgentStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, bool>|null $signatureMap
 * @property 'SUCCESS'|'FAILED'|'ACTIVE'|'INACTIVE' $status
 */
class AggregateStatus extends Shape
{
    /**
     * @param array{
     *     signatureMap?: array<string, bool>|null,
     *     status: 'SUCCESS'|'FAILED'|'ACTIVE'|'INACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
