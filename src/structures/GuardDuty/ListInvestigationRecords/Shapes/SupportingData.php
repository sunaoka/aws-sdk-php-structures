<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FetchRecord|null $Fetch
 * @property AnalysisRecord|null $Analysis
 * @property ObservationRecord|null $Observation
 * @property MetadataRecord|null $Metadata
 */
class SupportingData extends Shape
{
    /**
     * @param array{
     *     Fetch?: FetchRecord|null,
     *     Analysis?: AnalysisRecord|null,
     *     Observation?: ObservationRecord|null,
     *     Metadata?: MetadataRecord|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
