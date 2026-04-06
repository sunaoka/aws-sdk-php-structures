<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdatePrivacyBudgetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DifferentialPrivacyTemplateUpdateParameters|null $differentialPrivacy
 * @property AccessBudgetsPrivacyTemplateUpdateParameters|null $accessBudget
 */
class PrivacyBudgetTemplateUpdateParameters extends Shape
{
    /**
     * @param array{
     *     differentialPrivacy?: DifferentialPrivacyTemplateUpdateParameters|null,
     *     accessBudget?: AccessBudgetsPrivacyTemplateUpdateParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
