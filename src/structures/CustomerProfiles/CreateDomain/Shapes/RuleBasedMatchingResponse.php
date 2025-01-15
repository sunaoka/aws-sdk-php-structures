<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property list<MatchingRule>|null $MatchingRules
 * @property 'PENDING'|'IN_PROGRESS'|'ACTIVE'|null $Status
 * @property int<1, 15>|null $MaxAllowedRuleLevelForMerging
 * @property int<1, 15>|null $MaxAllowedRuleLevelForMatching
 * @property AttributeTypesSelector|null $AttributeTypesSelector
 * @property ConflictResolution|null $ConflictResolution
 * @property ExportingConfig|null $ExportingConfig
 */
class RuleBasedMatchingResponse extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     MatchingRules?: list<MatchingRule>|null,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'ACTIVE'|null,
     *     MaxAllowedRuleLevelForMerging?: int<1, 15>|null,
     *     MaxAllowedRuleLevelForMatching?: int<1, 15>|null,
     *     AttributeTypesSelector?: AttributeTypesSelector|null,
     *     ConflictResolution?: ConflictResolution|null,
     *     ExportingConfig?: ExportingConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
