<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Actions
 * @property RuleGroupSourceStatelessRuleMatchAttributes $MatchAttributes
 */
class RuleGroupSourceStatelessRuleDefinition extends Shape
{
    /**
     * @param array{
     *     Actions?: list<string>,
     *     MatchAttributes?: RuleGroupSourceStatelessRuleMatchAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
