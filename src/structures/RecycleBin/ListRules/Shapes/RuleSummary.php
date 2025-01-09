<?php

namespace Sunaoka\Aws\Structures\RecycleBin\ListRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Identifier
 * @property string $Description
 * @property RetentionPeriod $RetentionPeriod
 * @property 'locked'|'pending_unlock'|'unlocked' $LockState
 * @property string $RuleArn
 */
class RuleSummary extends Shape
{
    /**
     * @param array{
     *     Identifier?: string,
     *     Description?: string,
     *     RetentionPeriod?: RetentionPeriod,
     *     LockState?: 'locked'|'pending_unlock'|'unlocked',
     *     RuleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
