<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaborationPrivacyBudgetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DifferentialPrivacyTemplateParametersOutput|null $differentialPrivacy
 */
class PrivacyBudgetTemplateParametersOutput extends Shape
{
    /**
     * @param array{differentialPrivacy?: DifferentialPrivacyTemplateParametersOutput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
