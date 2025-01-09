<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetPrivacyBudgetTemplate\Shapes;

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
