<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property list<MatchingRule>|null $MatchingRules
 * @property int<1, 15>|null $MaxAllowedRuleLevelForMerging
 * @property int<1, 15>|null $MaxAllowedRuleLevelForMatching
 * @property AttributeTypesSelector|null $AttributeTypesSelector
 * @property ConflictResolution|null $ConflictResolution
 * @property ExportingConfig|null $ExportingConfig
 */
class RuleBasedMatchingRequest extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     MatchingRules?: list<MatchingRule>|null,
     *     MaxAllowedRuleLevelForMerging?: int<1, 15>|null,
     *     MaxAllowedRuleLevelForMatching?: int<1, 15>|null,
     *     AttributeTypesSelector?: AttributeTypesSelector|null,
     *     ConflictResolution?: ConflictResolution|null,
     *     ExportingConfig?: ExportingConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
