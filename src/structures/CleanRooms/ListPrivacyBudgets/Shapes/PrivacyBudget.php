<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListPrivacyBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DifferentialPrivacyPrivacyBudget|null $differentialPrivacy
 * @property AccessBudget|null $accessBudget
 */
class PrivacyBudget extends Shape
{
    /**
     * @param array{
     *     differentialPrivacy?: DifferentialPrivacyPrivacyBudget|null,
     *     accessBudget?: AccessBudget|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
