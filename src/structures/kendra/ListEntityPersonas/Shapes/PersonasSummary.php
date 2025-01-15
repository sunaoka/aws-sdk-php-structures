<?php

namespace Sunaoka\Aws\Structures\kendra\ListEntityPersonas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EntityId
 * @property 'OWNER'|'VIEWER'|null $Persona
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class PersonasSummary extends Shape
{
    /**
     * @param array{
     *     EntityId?: string|null,
     *     Persona?: 'OWNER'|'VIEWER'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
