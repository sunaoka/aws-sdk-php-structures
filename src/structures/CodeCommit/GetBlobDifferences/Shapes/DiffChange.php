<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetBlobDifferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTEXT'|'ADD'|'DELETE'|null $type
 * @property int|null $beforeLineNumber
 * @property int|null $afterLineNumber
 * @property string|null $content
 */
class DiffChange extends Shape
{
    /**
     * @param array{
     *     type?: 'CONTEXT'|'ADD'|'DELETE'|null,
     *     beforeLineNumber?: int|null,
     *     afterLineNumber?: int|null,
     *     content?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
