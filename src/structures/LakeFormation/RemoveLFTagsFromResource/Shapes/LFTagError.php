<?php

namespace Sunaoka\Aws\Structures\LakeFormation\RemoveLFTagsFromResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LFTagPair|null $LFTag
 * @property ErrorDetail|null $Error
 */
class LFTagError extends Shape
{
    /**
     * @param array{
     *     LFTag?: LFTagPair|null,
     *     Error?: ErrorDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
