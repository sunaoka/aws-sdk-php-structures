<?php

namespace Sunaoka\Aws\Structures\kendra\ListThesauri\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'ACTIVE_BUT_UPDATE_FAILED'|'FAILED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class ThesaurusSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Status?: 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'ACTIVE_BUT_UPDATE_FAILED'|'FAILED'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
