<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ByteMatchStatement|null $ByteMatchStatement
 * @property SqliMatchStatement|null $SqliMatchStatement
 * @property XssMatchStatement|null $XssMatchStatement
 * @property SizeConstraintStatement|null $SizeConstraintStatement
 * @property GeoMatchStatement|null $GeoMatchStatement
 * @property RuleGroupReferenceStatement|null $RuleGroupReferenceStatement
 * @property IPSetReferenceStatement|null $IPSetReferenceStatement
 * @property RegexPatternSetReferenceStatement|null $RegexPatternSetReferenceStatement
 * @property RateBasedStatement|null $RateBasedStatement
 * @property AndStatement|null $AndStatement
 * @property OrStatement|null $OrStatement
 * @property NotStatement|null $NotStatement
 * @property ManagedRuleGroupStatement|null $ManagedRuleGroupStatement
 * @property LabelMatchStatement|null $LabelMatchStatement
 * @property RegexMatchStatement|null $RegexMatchStatement
 * @property AsnMatchStatement|null $AsnMatchStatement
 */
class Statement extends Shape
{
    /**
     * @param array{
     *     ByteMatchStatement?: ByteMatchStatement|null,
     *     SqliMatchStatement?: SqliMatchStatement|null,
     *     XssMatchStatement?: XssMatchStatement|null,
     *     SizeConstraintStatement?: SizeConstraintStatement|null,
     *     GeoMatchStatement?: GeoMatchStatement|null,
     *     RuleGroupReferenceStatement?: RuleGroupReferenceStatement|null,
     *     IPSetReferenceStatement?: IPSetReferenceStatement|null,
     *     RegexPatternSetReferenceStatement?: RegexPatternSetReferenceStatement|null,
     *     RateBasedStatement?: RateBasedStatement|null,
     *     AndStatement?: AndStatement|null,
     *     OrStatement?: OrStatement|null,
     *     NotStatement?: NotStatement|null,
     *     ManagedRuleGroupStatement?: ManagedRuleGroupStatement|null,
     *     LabelMatchStatement?: LabelMatchStatement|null,
     *     RegexMatchStatement?: RegexMatchStatement|null,
     *     AsnMatchStatement?: AsnMatchStatement|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
