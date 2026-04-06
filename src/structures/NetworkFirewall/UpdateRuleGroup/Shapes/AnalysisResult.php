<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $IdentifiedRuleIds
 * @property 'STATELESS_RULE_FORWARDING_ASYMMETRICALLY'|'STATELESS_RULE_CONTAINS_TCP_FLAGS'|null $IdentifiedType
 * @property string|null $AnalysisDetail
 */
class AnalysisResult extends Shape
{
    /**
     * @param array{
     *     IdentifiedRuleIds?: list<string>|null,
     *     IdentifiedType?: 'STATELESS_RULE_FORWARDING_ASYMMETRICALLY'|'STATELESS_RULE_CONTAINS_TCP_FLAGS'|null,
     *     AnalysisDetail?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
