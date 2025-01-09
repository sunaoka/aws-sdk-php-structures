<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListCandidatesForAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CandidateArtifactLocations $CandidateArtifactLocations
 * @property list<MetricDatum> $CandidateMetrics
 */
class CandidateProperties extends Shape
{
    /**
     * @param array{
     *     CandidateArtifactLocations?: CandidateArtifactLocations,
     *     CandidateMetrics?: list<MetricDatum>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
