<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreatePrivacyBudgetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DifferentialPrivacyTemplateParametersOutput $differentialPrivacy
 */
class PrivacyBudgetTemplateParametersOutput extends Shape
{
    /**
     * @param array{differentialPrivacy?: DifferentialPrivacyTemplateParametersOutput} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
