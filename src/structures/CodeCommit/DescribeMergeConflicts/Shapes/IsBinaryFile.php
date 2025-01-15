<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribeMergeConflicts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $source
 * @property bool|null $destination
 * @property bool|null $base
 */
class IsBinaryFile extends Shape
{
    /**
     * @param array{
     *     source?: bool|null,
     *     destination?: bool|null,
     *     base?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
