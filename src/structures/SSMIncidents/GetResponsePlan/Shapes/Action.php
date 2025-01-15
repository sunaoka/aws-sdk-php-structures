<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetResponsePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SsmAutomation|null $ssmAutomation
 */
class Action extends Shape
{
    /**
     * @param array{ssmAutomation?: SsmAutomation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
