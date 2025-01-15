<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupSelection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConditionKey
 * @property string|null $ConditionValue
 */
class ConditionParameter extends Shape
{
    /**
     * @param array{
     *     ConditionKey?: string|null,
     *     ConditionValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
