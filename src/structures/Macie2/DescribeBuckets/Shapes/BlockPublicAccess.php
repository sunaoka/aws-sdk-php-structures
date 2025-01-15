<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $blockPublicAcls
 * @property bool|null $blockPublicPolicy
 * @property bool|null $ignorePublicAcls
 * @property bool|null $restrictPublicBuckets
 */
class BlockPublicAccess extends Shape
{
    /**
     * @param array{
     *     blockPublicAcls?: bool|null,
     *     blockPublicPolicy?: bool|null,
     *     ignorePublicAcls?: bool|null,
     *     restrictPublicBuckets?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
