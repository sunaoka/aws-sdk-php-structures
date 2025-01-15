<?php

namespace Sunaoka\Aws\Structures\S3\CompleteMultipartUpload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CompletedPart>|null $Parts
 */
class CompletedMultipartUpload extends Shape
{
    /**
     * @param array{Parts?: list<CompletedPart>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
