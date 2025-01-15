<?php

namespace Sunaoka\Aws\Structures\Backup\GetRestoreTestingSelection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<KeyValue>|null $StringEquals
 * @property list<KeyValue>|null $StringNotEquals
 */
class ProtectedResourceConditions extends Shape
{
    /**
     * @param array{
     *     StringEquals?: list<KeyValue>|null,
     *     StringNotEquals?: list<KeyValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
