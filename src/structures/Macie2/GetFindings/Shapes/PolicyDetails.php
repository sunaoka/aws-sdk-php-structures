<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FindingAction $action
 * @property FindingActor $actor
 */
class PolicyDetails extends Shape
{
    /**
     * @param array{
     *     action?: FindingAction,
     *     actor?: FindingActor
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
