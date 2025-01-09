<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreatePrivacyBudgetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DifferentialPrivacyTemplateParametersInput $differentialPrivacy
 */
class PrivacyBudgetTemplateParametersInput extends Shape
{
    /**
     * @param array{differentialPrivacy?: DifferentialPrivacyTemplateParametersInput} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
