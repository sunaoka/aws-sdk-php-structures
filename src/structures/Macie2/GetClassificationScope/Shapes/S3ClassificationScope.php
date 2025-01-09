<?php

namespace Sunaoka\Aws\Structures\Macie2\GetClassificationScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ClassificationScopeExclusion $excludes
 */
class S3ClassificationScope extends Shape
{
    /**
     * @param array{excludes: S3ClassificationScopeExclusion} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
