<?php

namespace Sunaoka\Aws\Structures\Backup\CreateBackupSelection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ConditionParameter>|null $StringEquals
 * @property list<ConditionParameter>|null $StringNotEquals
 * @property list<ConditionParameter>|null $StringLike
 * @property list<ConditionParameter>|null $StringNotLike
 */
class Conditions extends Shape
{
    /**
     * @param array{
     *     StringEquals?: list<ConditionParameter>|null,
     *     StringNotEquals?: list<ConditionParameter>|null,
     *     StringLike?: list<ConditionParameter>|null,
     *     StringNotLike?: list<ConditionParameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
