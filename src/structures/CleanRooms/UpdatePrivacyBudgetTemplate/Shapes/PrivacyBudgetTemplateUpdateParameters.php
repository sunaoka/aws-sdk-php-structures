<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdatePrivacyBudgetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DifferentialPrivacyTemplateUpdateParameters $differentialPrivacy
 */
class PrivacyBudgetTemplateUpdateParameters extends Shape
{
    /**
     * @param array{differentialPrivacy?: DifferentialPrivacyTemplateUpdateParameters} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
