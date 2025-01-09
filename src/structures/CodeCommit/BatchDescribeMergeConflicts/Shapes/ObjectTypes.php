<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchDescribeMergeConflicts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FILE'|'DIRECTORY'|'GIT_LINK'|'SYMBOLIC_LINK' $source
 * @property 'FILE'|'DIRECTORY'|'GIT_LINK'|'SYMBOLIC_LINK' $destination
 * @property 'FILE'|'DIRECTORY'|'GIT_LINK'|'SYMBOLIC_LINK' $base
 */
class ObjectTypes extends Shape
{
    /**
     * @param array{
     *     source?: 'FILE'|'DIRECTORY'|'GIT_LINK'|'SYMBOLIC_LINK',
     *     destination?: 'FILE'|'DIRECTORY'|'GIT_LINK'|'SYMBOLIC_LINK',
     *     base?: 'FILE'|'DIRECTORY'|'GIT_LINK'|'SYMBOLIC_LINK'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
