<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationPrivacyBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DifferentialPrivacyPrivacyBudget|null $differentialPrivacy
 */
class PrivacyBudget extends Shape
{
    /**
     * @param array{differentialPrivacy?: DifferentialPrivacyPrivacyBudget|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
