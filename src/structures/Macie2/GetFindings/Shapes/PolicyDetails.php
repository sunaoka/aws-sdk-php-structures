<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FindingAction|null $action
 * @property FindingActor|null $actor
 */
class PolicyDetails extends Shape
{
    /**
     * @param array{
     *     action?: FindingAction|null,
     *     actor?: FindingActor|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
