<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Actions
 * @property RuleGroupSourceStatelessRuleMatchAttributes|null $MatchAttributes
 */
class RuleGroupSourceStatelessRuleDefinition extends Shape
{
    /**
     * @param array{
     *     Actions?: list<string>|null,
     *     MatchAttributes?: RuleGroupSourceStatelessRuleMatchAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
