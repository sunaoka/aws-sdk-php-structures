<?php

namespace Sunaoka\Aws\Structures\Backup\CreateBackupSelection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STRINGEQUALS' $ConditionType
 * @property string $ConditionKey
 * @property string $ConditionValue
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     ConditionType: 'STRINGEQUALS',
     *     ConditionKey: string,
     *     ConditionValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
