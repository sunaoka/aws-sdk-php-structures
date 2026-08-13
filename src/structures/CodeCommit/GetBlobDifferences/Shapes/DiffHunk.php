<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetBlobDifferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $beforeStartLine
 * @property int|null $beforeLineCount
 * @property int|null $afterStartLine
 * @property int|null $afterLineCount
 * @property list<DiffChange>|null $changes
 */
class DiffHunk extends Shape
{
    /**
     * @param array{
     *     beforeStartLine?: int|null,
     *     beforeLineCount?: int|null,
     *     afterStartLine?: int|null,
     *     afterLineCount?: int|null,
     *     changes?: list<DiffChange>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
