<?php

namespace Sunaoka\Aws\Structures\ApplicationCostProfiler\UpdateReportDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reportId
 * @property string $reportDescription
 * @property 'MONTHLY'|'DAILY'|'ALL' $reportFrequency
 * @property 'CSV'|'PARQUET' $format
 * @property Shapes\S3Location $destinationS3Location
 */
class UpdateReportDefinitionRequest extends Request
{
    /**
     * @param array{
     *     reportId: string,
     *     reportDescription: string,
     *     reportFrequency: 'MONTHLY'|'DAILY'|'ALL',
     *     format: 'CSV'|'PARQUET',
     *     destinationS3Location: Shapes\S3Location
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
