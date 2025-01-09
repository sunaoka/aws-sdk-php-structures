<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ignorePublicAcls
 * @property bool $restrictPublicBuckets
 */
class S3PublicAccessBlockConfiguration extends Shape
{
    /**
     * @param array{
     *     ignorePublicAcls: bool,
     *     restrictPublicBuckets: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
