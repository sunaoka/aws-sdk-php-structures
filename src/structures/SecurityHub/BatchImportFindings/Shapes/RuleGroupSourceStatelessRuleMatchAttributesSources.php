<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AddressDefinition
 */
class RuleGroupSourceStatelessRuleMatchAttributesSources extends Shape
{
    /**
     * @param array{AddressDefinition?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
