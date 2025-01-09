<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateResponsePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SsmAutomation $ssmAutomation
 */
class Action extends Shape
{
    /**
     * @param array{ssmAutomation?: SsmAutomation} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
