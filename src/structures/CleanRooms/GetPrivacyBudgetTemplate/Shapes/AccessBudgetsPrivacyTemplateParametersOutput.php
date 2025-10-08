<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetPrivacyBudgetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BudgetParameter> $budgetParameters
 * @property string $resourceArn
 */
class AccessBudgetsPrivacyTemplateParametersOutput extends Shape
{
    /**
     * @param array{
     *     budgetParameters: list<BudgetParameter>,
     *     resourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
