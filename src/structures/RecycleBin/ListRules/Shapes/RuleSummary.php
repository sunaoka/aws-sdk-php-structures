<?php

namespace Sunaoka\Aws\Structures\RecycleBin\ListRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Identifier
 * @property string|null $Description
 * @property RetentionPeriod|null $RetentionPeriod
 * @property 'locked'|'pending_unlock'|'unlocked'|null $LockState
 */
class RuleSummary extends Shape
{
    /**
     * @param array{
     *     Identifier?: string|null,
     *     Description?: string|null,
     *     RetentionPeriod?: RetentionPeriod|null,
     *     LockState?: 'locked'|'pending_unlock'|'unlocked'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
