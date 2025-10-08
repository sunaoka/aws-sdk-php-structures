<?php

namespace Sunaoka\Aws\Structures\PI;

class PIClient extends \Aws\PI\PIClient
{
    use CreatePerformanceAnalysisReport\CreatePerformanceAnalysisReportTrait;
    use DeletePerformanceAnalysisReport\DeletePerformanceAnalysisReportTrait;
    use DescribeDimensionKeys\DescribeDimensionKeysTrait;
    use GetDimensionKeyDetails\GetDimensionKeyDetailsTrait;
    use GetPerformanceAnalysisReport\GetPerformanceAnalysisReportTrait;
    use GetResourceMetadata\GetResourceMetadataTrait;
    use GetResourceMetrics\GetResourceMetricsTrait;
    use ListAvailableResourceDimensions\ListAvailableResourceDimensionsTrait;
    use ListAvailableResourceMetrics\ListAvailableResourceMetricsTrait;
    use ListPerformanceAnalysisReports\ListPerformanceAnalysisReportsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
