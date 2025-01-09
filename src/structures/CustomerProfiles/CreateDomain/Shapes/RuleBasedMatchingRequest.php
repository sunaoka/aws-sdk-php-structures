<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property list<MatchingRule> $MatchingRules
 * @property int<1, 15> $MaxAllowedRuleLevelForMerging
 * @property int<1, 15> $MaxAllowedRuleLevelForMatching
 * @property AttributeTypesSelector $AttributeTypesSelector
 * @property ConflictResolution $ConflictResolution
 * @property ExportingConfig $ExportingConfig
 */
class RuleBasedMatchingRequest extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     MatchingRules?: list<MatchingRule>,
     *     MaxAllowedRuleLevelForMerging?: int<1, 15>,
     *     MaxAllowedRuleLevelForMatching?: int<1, 15>,
     *     AttributeTypesSelector?: AttributeTypesSelector,
     *     ConflictResolution?: ConflictResolution,
     *     ExportingConfig?: ExportingConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
