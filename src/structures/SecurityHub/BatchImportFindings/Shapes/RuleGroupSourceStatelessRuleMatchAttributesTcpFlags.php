<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Flags
 * @property list<string> $Masks
 */
class RuleGroupSourceStatelessRuleMatchAttributesTcpFlags extends Shape
{
    /**
     * @param array{
     *     Flags?: list<string>,
     *     Masks?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
