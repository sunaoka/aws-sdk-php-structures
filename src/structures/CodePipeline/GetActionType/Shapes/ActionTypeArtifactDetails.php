<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetActionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 10> $minimumCount
 * @property int<0, 10> $maximumCount
 */
class ActionTypeArtifactDetails extends Shape
{
    /**
     * @param array{
     *     minimumCount: int<0, 10>,
     *     maximumCount: int<0, 10>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
