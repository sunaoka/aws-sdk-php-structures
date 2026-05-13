<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetCodeReviews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $s3Location
 */
class SourceCodeRepository extends Shape
{
    /**
     * @param array{s3Location?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
