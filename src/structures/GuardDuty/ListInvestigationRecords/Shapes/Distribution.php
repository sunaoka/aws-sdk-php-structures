<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEVERITY'|'TYPE'|'RESOURCE'|'ATTACK_VECTOR'|'ARCHIVE' $Dimension
 * @property int<0, max>|null $TotalFindings
 * @property SeverityBreakdown|null $SeverityBreakdown
 * @property list<TypeDistribution>|null $FindingTypes
 * @property list<FindingTypeCount>|null $TopFindingTypes
 * @property list<ResourceDistribution>|null $Resources
 * @property list<TacticCoverage>|null $AttackVectors
 * @property ArchiveDistribution|null $Archive
 */
class Distribution extends Shape
{
    /**
     * @param array{
     *     Dimension: 'SEVERITY'|'TYPE'|'RESOURCE'|'ATTACK_VECTOR'|'ARCHIVE',
     *     TotalFindings?: int<0, max>|null,
     *     SeverityBreakdown?: SeverityBreakdown|null,
     *     FindingTypes?: list<TypeDistribution>|null,
     *     TopFindingTypes?: list<FindingTypeCount>|null,
     *     Resources?: list<ResourceDistribution>|null,
     *     AttackVectors?: list<TacticCoverage>|null,
     *     Archive?: ArchiveDistribution|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
