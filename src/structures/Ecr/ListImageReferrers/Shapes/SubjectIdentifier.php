<?php

namespace Sunaoka\Aws\Structures\Ecr\ListImageReferrers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageDigest
 */
class SubjectIdentifier extends Shape
{
    /**
     * @param array{imageDigest: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
