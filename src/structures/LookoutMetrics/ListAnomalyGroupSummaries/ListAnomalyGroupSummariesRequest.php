<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyGroupSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property int $SensitivityThreshold
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListAnomalyGroupSummariesRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn: string,
     *     SensitivityThreshold: int,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
