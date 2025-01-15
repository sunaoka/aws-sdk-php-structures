<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketIntelligentTieringConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Prefix
 * @property Tag|null $Tag
 * @property IntelligentTieringAndOperator|null $And
 */
class IntelligentTieringFilter extends Shape
{
    /**
     * @param array{
     *     Prefix?: string|null,
     *     Tag?: Tag|null,
     *     And?: IntelligentTieringAndOperator|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
