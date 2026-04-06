<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreatePrivacyBudgetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DifferentialPrivacyTemplateParametersOutput|null $differentialPrivacy
 * @property AccessBudgetsPrivacyTemplateParametersOutput|null $accessBudget
 */
class PrivacyBudgetTemplateParametersOutput extends Shape
{
    /**
     * @param array{
     *     differentialPrivacy?: DifferentialPrivacyTemplateParametersOutput|null,
     *     accessBudget?: AccessBudgetsPrivacyTemplateParametersOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
