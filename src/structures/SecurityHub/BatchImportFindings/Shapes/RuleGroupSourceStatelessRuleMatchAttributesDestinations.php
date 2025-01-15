<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AddressDefinition
 */
class RuleGroupSourceStatelessRuleMatchAttributesDestinations extends Shape
{
    /**
     * @param array{AddressDefinition?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
