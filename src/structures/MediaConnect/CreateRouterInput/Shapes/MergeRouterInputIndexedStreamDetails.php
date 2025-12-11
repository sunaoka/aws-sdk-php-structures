<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $SourceIndex
 * @property string|null $SourceIpAddress
 */
class MergeRouterInputIndexedStreamDetails extends Shape
{
    /**
     * @param array{
     *     SourceIndex: int,
     *     SourceIpAddress?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
