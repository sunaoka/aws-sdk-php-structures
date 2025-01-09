<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AddressDefinition
 */
class RuleGroupSourceStatelessRuleMatchAttributesDestinations extends Shape
{
    /**
     * @param array{AddressDefinition?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
