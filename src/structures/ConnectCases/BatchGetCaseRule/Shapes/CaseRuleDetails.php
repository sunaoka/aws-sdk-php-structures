<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchGetCaseRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RequiredCaseRule|null $required
 */
class CaseRuleDetails extends Shape
{
    /**
     * @param array{required?: RequiredCaseRule|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
