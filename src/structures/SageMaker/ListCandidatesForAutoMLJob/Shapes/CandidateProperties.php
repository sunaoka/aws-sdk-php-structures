<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListCandidatesForAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CandidateArtifactLocations|null $CandidateArtifactLocations
 * @property list<MetricDatum>|null $CandidateMetrics
 */
class CandidateProperties extends Shape
{
    /**
     * @param array{
     *     CandidateArtifactLocations?: CandidateArtifactLocations|null,
     *     CandidateMetrics?: list<MetricDatum>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
