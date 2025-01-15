<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Flags
 * @property list<string>|null $Masks
 */
class RuleGroupSourceStatelessRuleMatchAttributesTcpFlags extends Shape
{
    /**
     * @param array{
     *     Flags?: list<string>|null,
     *     Masks?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
