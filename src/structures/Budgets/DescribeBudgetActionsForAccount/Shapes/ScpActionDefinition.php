<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetActionsForAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyId
 * @property list<string> $TargetIds
 */
class ScpActionDefinition extends Shape
{
    /**
     * @param array{
     *     PolicyId: string,
     *     TargetIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
