<?php

namespace Sunaoka\Aws\Structures\S3\CompleteMultipartUpload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CompletedPart> $Parts
 */
class CompletedMultipartUpload extends Shape
{
    /**
     * @param array{Parts?: list<CompletedPart>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
