<?php

namespace Sunaoka\Aws\Structures\Macie2\GetClassificationScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $bucketNames
 */
class S3ClassificationScopeExclusion extends Shape
{
    /**
     * @param array{bucketNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
