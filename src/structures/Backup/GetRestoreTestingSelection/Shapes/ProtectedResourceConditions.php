<?php

namespace Sunaoka\Aws\Structures\Backup\GetRestoreTestingSelection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<KeyValue> $StringEquals
 * @property list<KeyValue> $StringNotEquals
 */
class ProtectedResourceConditions extends Shape
{
    /**
     * @param array{
     *     StringEquals?: list<KeyValue>,
     *     StringNotEquals?: list<KeyValue>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
