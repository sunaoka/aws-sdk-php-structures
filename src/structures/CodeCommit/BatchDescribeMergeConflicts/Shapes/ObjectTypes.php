<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchDescribeMergeConflicts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FILE'|'DIRECTORY'|'GIT_LINK'|'SYMBOLIC_LINK'|null $source
 * @property 'FILE'|'DIRECTORY'|'GIT_LINK'|'SYMBOLIC_LINK'|null $destination
 * @property 'FILE'|'DIRECTORY'|'GIT_LINK'|'SYMBOLIC_LINK'|null $base
 */
class ObjectTypes extends Shape
{
    /**
     * @param array{
     *     source?: 'FILE'|'DIRECTORY'|'GIT_LINK'|'SYMBOLIC_LINK'|null,
     *     destination?: 'FILE'|'DIRECTORY'|'GIT_LINK'|'SYMBOLIC_LINK'|null,
     *     base?: 'FILE'|'DIRECTORY'|'GIT_LINK'|'SYMBOLIC_LINK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
