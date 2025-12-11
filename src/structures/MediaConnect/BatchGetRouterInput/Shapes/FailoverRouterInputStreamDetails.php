<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FailoverRouterInputIndexedStreamDetails $SourceIndexZeroStreamDetails
 * @property FailoverRouterInputIndexedStreamDetails $SourceIndexOneStreamDetails
 */
class FailoverRouterInputStreamDetails extends Shape
{
    /**
     * @param array{
     *     SourceIndexZeroStreamDetails: FailoverRouterInputIndexedStreamDetails,
     *     SourceIndexOneStreamDetails: FailoverRouterInputIndexedStreamDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
