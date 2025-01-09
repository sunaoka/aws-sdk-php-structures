<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StatelessCustomActionDefinition $ActionDefinition
 * @property string $ActionName
 */
class RuleGroupSourceCustomActionsDetails extends Shape
{
    /**
     * @param array{
     *     ActionDefinition?: StatelessCustomActionDefinition,
     *     ActionName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
