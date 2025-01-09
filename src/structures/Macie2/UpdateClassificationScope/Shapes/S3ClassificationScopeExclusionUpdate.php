<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateClassificationScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $bucketNames
 * @property 'ADD'|'REPLACE'|'REMOVE' $operation
 */
class S3ClassificationScopeExclusionUpdate extends Shape
{
    /**
     * @param array{
     *     bucketNames: list<string>,
     *     operation: 'ADD'|'REPLACE'|'REMOVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
