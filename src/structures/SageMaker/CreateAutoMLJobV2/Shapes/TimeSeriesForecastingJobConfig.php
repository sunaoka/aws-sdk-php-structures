<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FeatureSpecificationS3Uri
 * @property AutoMLJobCompletionCriteria|null $CompletionCriteria
 * @property string $ForecastFrequency
 * @property int<1, max> $ForecastHorizon
 * @property list<string>|null $ForecastQuantiles
 * @property TimeSeriesTransformations|null $Transformations
 * @property TimeSeriesConfig $TimeSeriesConfig
 * @property list<HolidayConfigAttributes>|null $HolidayConfig
 * @property CandidateGenerationConfig|null $CandidateGenerationConfig
 */
class TimeSeriesForecastingJobConfig extends Shape
{
    /**
     * @param array{
     *     FeatureSpecificationS3Uri?: string|null,
     *     CompletionCriteria?: AutoMLJobCompletionCriteria|null,
     *     ForecastFrequency: string,
     *     ForecastHorizon: int<1, max>,
     *     ForecastQuantiles?: list<string>|null,
     *     Transformations?: TimeSeriesTransformations|null,
     *     TimeSeriesConfig: TimeSeriesConfig,
     *     HolidayConfig?: list<HolidayConfigAttributes>|null,
     *     CandidateGenerationConfig?: CandidateGenerationConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
