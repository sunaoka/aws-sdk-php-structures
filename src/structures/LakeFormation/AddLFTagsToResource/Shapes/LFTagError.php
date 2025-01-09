<?php

namespace Sunaoka\Aws\Structures\LakeFormation\AddLFTagsToResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LFTagPair $LFTag
 * @property ErrorDetail $Error
 */
class LFTagError extends Shape
{
    /**
     * @param array{
     *     LFTag?: LFTagPair,
     *     Error?: ErrorDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
