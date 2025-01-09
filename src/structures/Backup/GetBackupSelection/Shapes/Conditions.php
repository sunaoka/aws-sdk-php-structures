<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupSelection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ConditionParameter> $StringEquals
 * @property list<ConditionParameter> $StringNotEquals
 * @property list<ConditionParameter> $StringLike
 * @property list<ConditionParameter> $StringNotLike
 */
class Conditions extends Shape
{
    /**
     * @param array{
     *     StringEquals?: list<ConditionParameter>,
     *     StringNotEquals?: list<ConditionParameter>,
     *     StringLike?: list<ConditionParameter>,
     *     StringNotLike?: list<ConditionParameter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
