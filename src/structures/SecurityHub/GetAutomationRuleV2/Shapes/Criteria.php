<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetAutomationRuleV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OcsfFindingFilters|null $OcsfFindingCriteria
 */
class Criteria extends Shape
{
    /**
     * @param array{OcsfFindingCriteria?: OcsfFindingFilters|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
