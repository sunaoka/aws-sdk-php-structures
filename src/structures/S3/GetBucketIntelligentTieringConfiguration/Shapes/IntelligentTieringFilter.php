<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketIntelligentTieringConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Prefix
 * @property Tag $Tag
 * @property IntelligentTieringAndOperator $And
 */
class IntelligentTieringFilter extends Shape
{
    /**
     * @param array{
     *     Prefix?: string,
     *     Tag?: Tag,
     *     And?: IntelligentTieringAndOperator
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
