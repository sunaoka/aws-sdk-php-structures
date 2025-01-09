<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ByteMatchStatement $ByteMatchStatement
 * @property SqliMatchStatement $SqliMatchStatement
 * @property XssMatchStatement $XssMatchStatement
 * @property SizeConstraintStatement $SizeConstraintStatement
 * @property GeoMatchStatement $GeoMatchStatement
 * @property RuleGroupReferenceStatement $RuleGroupReferenceStatement
 * @property IPSetReferenceStatement $IPSetReferenceStatement
 * @property RegexPatternSetReferenceStatement $RegexPatternSetReferenceStatement
 * @property RateBasedStatement $RateBasedStatement
 * @property AndStatement $AndStatement
 * @property OrStatement $OrStatement
 * @property NotStatement $NotStatement
 * @property ManagedRuleGroupStatement $ManagedRuleGroupStatement
 * @property LabelMatchStatement $LabelMatchStatement
 * @property RegexMatchStatement $RegexMatchStatement
 */
class Statement extends Shape
{
    /**
     * @param array{
     *     ByteMatchStatement?: ByteMatchStatement,
     *     SqliMatchStatement?: SqliMatchStatement,
     *     XssMatchStatement?: XssMatchStatement,
     *     SizeConstraintStatement?: SizeConstraintStatement,
     *     GeoMatchStatement?: GeoMatchStatement,
     *     RuleGroupReferenceStatement?: RuleGroupReferenceStatement,
     *     IPSetReferenceStatement?: IPSetReferenceStatement,
     *     RegexPatternSetReferenceStatement?: RegexPatternSetReferenceStatement,
     *     RateBasedStatement?: RateBasedStatement,
     *     AndStatement?: AndStatement,
     *     OrStatement?: OrStatement,
     *     NotStatement?: NotStatement,
     *     ManagedRuleGroupStatement?: ManagedRuleGroupStatement,
     *     LabelMatchStatement?: LabelMatchStatement,
     *     RegexMatchStatement?: RegexMatchStatement
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
