<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DeleteACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $UserNamesToRemove
 * @property list<string> $UserNamesToAdd
 */
class ACLPendingChanges extends Shape
{
    /**
     * @param array{
     *     UserNamesToRemove?: list<string>,
     *     UserNamesToAdd?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
