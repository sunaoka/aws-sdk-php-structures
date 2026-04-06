<?php

namespace Sunaoka\Aws\Structures\SageMakerMetrics;

class SageMakerMetricsClient extends \Aws\SageMakerMetrics\SageMakerMetricsClient
{
    use BatchGetMetrics\BatchGetMetricsTrait;
    use BatchPutMetrics\BatchPutMetricsTrait;
}
