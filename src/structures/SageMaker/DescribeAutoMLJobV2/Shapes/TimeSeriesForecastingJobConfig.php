<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FeatureSpecificationS3Uri
 * @property AutoMLJobCompletionCriteria $CompletionCriteria
 * @property string $ForecastFrequency
 * @property int $ForecastHorizon
 * @property list<string> $ForecastQuantiles
 * @property TimeSeriesTransformations $Transformations
 * @property TimeSeriesConfig $TimeSeriesConfig
 * @property list<HolidayConfigAttributes> $HolidayConfig
 * @property CandidateGenerationConfig $CandidateGenerationConfig
 */
class TimeSeriesForecastingJobConfig extends Shape
{
    /**
     * @param array{
     *     FeatureSpecificationS3Uri?: string,
     *     CompletionCriteria?: AutoMLJobCompletionCriteria,
     *     ForecastFrequency: string,
     *     ForecastHorizon: int,
     *     ForecastQuantiles?: list<string>,
     *     Transformations?: TimeSeriesTransformations,
     *     TimeSeriesConfig: TimeSeriesConfig,
     *     HolidayConfig?: list<HolidayConfigAttributes>,
     *     CandidateGenerationConfig?: CandidateGenerationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
