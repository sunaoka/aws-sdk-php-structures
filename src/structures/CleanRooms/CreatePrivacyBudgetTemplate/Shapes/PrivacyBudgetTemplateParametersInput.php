<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreatePrivacyBudgetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DifferentialPrivacyTemplateParametersInput|null $differentialPrivacy
 */
class PrivacyBudgetTemplateParametersInput extends Shape
{
    /**
     * @param array{differentialPrivacy?: DifferentialPrivacyTemplateParametersInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
