<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $IdentifiedRuleIds
 * @property 'STATELESS_RULE_FORWARDING_ASYMMETRICALLY'|'STATELESS_RULE_CONTAINS_TCP_FLAGS' $IdentifiedType
 * @property string $AnalysisDetail
 */
class AnalysisResult extends Shape
{
    /**
     * @param array{
     *     IdentifiedRuleIds?: list<string>,
     *     IdentifiedType?: 'STATELESS_RULE_FORWARDING_ASYMMETRICALLY'|'STATELESS_RULE_CONTAINS_TCP_FLAGS',
     *     AnalysisDetail?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
