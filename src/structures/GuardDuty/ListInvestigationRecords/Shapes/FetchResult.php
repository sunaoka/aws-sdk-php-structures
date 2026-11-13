<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ItemIds
 * @property int<0, max>|null $TotalCount
 * @property list<InvestigationDetectorFeatureConfiguration>|null $Features
 * @property 'THREAT'|'BENIGN'|'NEUTRAL'|null $Verdict
 * @property FindingTypeDocumentation|null $Documentation
 */
class FetchResult extends Shape
{
    /**
     * @param array{
     *     ItemIds?: list<string>|null,
     *     TotalCount?: int<0, max>|null,
     *     Features?: list<InvestigationDetectorFeatureConfiguration>|null,
     *     Verdict?: 'THREAT'|'BENIGN'|'NEUTRAL'|null,
     *     Documentation?: FindingTypeDocumentation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
