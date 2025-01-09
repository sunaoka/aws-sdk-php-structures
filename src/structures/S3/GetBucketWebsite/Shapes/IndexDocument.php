<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketWebsite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Suffix
 */
class IndexDocument extends Shape
{
    /**
     * @param array{Suffix: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
