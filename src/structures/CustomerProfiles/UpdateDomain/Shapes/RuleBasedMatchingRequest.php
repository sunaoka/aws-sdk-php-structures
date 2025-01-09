<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property list<MatchingRule> $MatchingRules
 * @property int $MaxAllowedRuleLevelForMerging
 * @property int $MaxAllowedRuleLevelForMatching
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
     *     MaxAllowedRuleLevelForMerging?: int,
     *     MaxAllowedRuleLevelForMatching?: int,
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
