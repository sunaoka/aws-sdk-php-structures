<?php

namespace Sunaoka\Aws\Structures\kendra\ListEntityPersonas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EntityId
 * @property 'OWNER'|'VIEWER' $Persona
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class PersonasSummary extends Shape
{
    /**
     * @param array{
     *     EntityId?: string,
     *     Persona?: 'OWNER'|'VIEWER',
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
