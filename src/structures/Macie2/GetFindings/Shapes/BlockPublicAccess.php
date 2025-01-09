<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $blockPublicAcls
 * @property bool $blockPublicPolicy
 * @property bool $ignorePublicAcls
 * @property bool $restrictPublicBuckets
 */
class BlockPublicAccess extends Shape
{
    /**
     * @param array{
     *     blockPublicAcls?: bool,
     *     blockPublicPolicy?: bool,
     *     ignorePublicAcls?: bool,
     *     restrictPublicBuckets?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
