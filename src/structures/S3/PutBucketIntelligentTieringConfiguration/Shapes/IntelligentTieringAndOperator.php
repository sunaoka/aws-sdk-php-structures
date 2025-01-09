<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketIntelligentTieringConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Prefix
 * @property list<Tag> $Tags
 */
class IntelligentTieringAndOperator extends Shape
{
    /**
     * @param array{
     *     Prefix?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
