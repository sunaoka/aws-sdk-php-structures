<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListActionTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 5> $minimumCount
 * @property int<0, 5> $maximumCount
 */
class ArtifactDetails extends Shape
{
    /**
     * @param array{
     *     minimumCount: int<0, 5>,
     *     maximumCount: int<0, 5>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
