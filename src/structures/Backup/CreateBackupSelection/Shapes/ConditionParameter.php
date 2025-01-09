<?php

namespace Sunaoka\Aws\Structures\Backup\CreateBackupSelection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConditionKey
 * @property string $ConditionValue
 */
class ConditionParameter extends Shape
{
    /**
     * @param array{
     *     ConditionKey?: string,
     *     ConditionValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
