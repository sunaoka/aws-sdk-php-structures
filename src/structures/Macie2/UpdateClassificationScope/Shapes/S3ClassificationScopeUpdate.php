<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateClassificationScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ClassificationScopeExclusionUpdate $excludes
 */
class S3ClassificationScopeUpdate extends Shape
{
    /**
     * @param array{excludes: S3ClassificationScopeExclusionUpdate} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
