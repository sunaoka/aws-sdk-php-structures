<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MergeRouterInputIndexedStreamDetails $SourceIndexZeroStreamDetails
 * @property MergeRouterInputIndexedStreamDetails $SourceIndexOneStreamDetails
 */
class MergeRouterInputStreamDetails extends Shape
{
    /**
     * @param array{
     *     SourceIndexZeroStreamDetails: MergeRouterInputIndexedStreamDetails,
     *     SourceIndexOneStreamDetails: MergeRouterInputIndexedStreamDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
