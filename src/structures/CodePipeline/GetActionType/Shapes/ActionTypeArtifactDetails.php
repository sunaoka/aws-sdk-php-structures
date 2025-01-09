<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetActionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $minimumCount
 * @property int $maximumCount
 */
class ActionTypeArtifactDetails extends Shape
{
    /**
     * @param array{
     *     minimumCount: int,
     *     maximumCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
