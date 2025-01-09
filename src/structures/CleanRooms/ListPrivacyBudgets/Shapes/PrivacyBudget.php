<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListPrivacyBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DifferentialPrivacyPrivacyBudget $differentialPrivacy
 */
class PrivacyBudget extends Shape
{
    /**
     * @param array{differentialPrivacy?: DifferentialPrivacyPrivacyBudget} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
