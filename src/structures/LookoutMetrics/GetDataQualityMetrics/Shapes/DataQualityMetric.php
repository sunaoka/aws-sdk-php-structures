<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetDataQualityMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COLUMN_COMPLETENESS'|'DIMENSION_UNIQUENESS'|'TIME_SERIES_COUNT'|'ROWS_PROCESSED'|'ROWS_PARTIAL_COMPLIANCE'|'INVALID_ROWS_COMPLIANCE'|'BACKTEST_TRAINING_DATA_START_TIME_STAMP'|'BACKTEST_TRAINING_DATA_END_TIME_STAMP'|'BACKTEST_INFERENCE_DATA_START_TIME_STAMP'|'BACKTEST_INFERENCE_DATA_END_TIME_STAMP' $MetricType
 * @property string $MetricDescription
 * @property string $RelatedColumnName
 * @property double $MetricValue
 */
class DataQualityMetric extends Shape
{
    /**
     * @param array{
     *     MetricType?: 'COLUMN_COMPLETENESS'|'DIMENSION_UNIQUENESS'|'TIME_SERIES_COUNT'|'ROWS_PROCESSED'|'ROWS_PARTIAL_COMPLIANCE'|'INVALID_ROWS_COMPLIANCE'|'BACKTEST_TRAINING_DATA_START_TIME_STAMP'|'BACKTEST_TRAINING_DATA_END_TIME_STAMP'|'BACKTEST_INFERENCE_DATA_START_TIME_STAMP'|'BACKTEST_INFERENCE_DATA_END_TIME_STAMP',
     *     MetricDescription?: string,
     *     RelatedColumnName?: string,
     *     MetricValue?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
