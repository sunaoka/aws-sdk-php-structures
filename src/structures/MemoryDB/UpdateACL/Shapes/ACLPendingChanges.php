<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $UserNamesToRemove
 * @property list<string>|null $UserNamesToAdd
 */
class ACLPendingChanges extends Shape
{
    /**
     * @param array{
     *     UserNamesToRemove?: list<string>|null,
     *     UserNamesToAdd?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
