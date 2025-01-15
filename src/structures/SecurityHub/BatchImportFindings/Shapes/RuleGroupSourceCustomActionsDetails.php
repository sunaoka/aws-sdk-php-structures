<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StatelessCustomActionDefinition|null $ActionDefinition
 * @property string|null $ActionName
 */
class RuleGroupSourceCustomActionsDetails extends Shape
{
    /**
     * @param array{
     *     ActionDefinition?: StatelessCustomActionDefinition|null,
     *     ActionName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
