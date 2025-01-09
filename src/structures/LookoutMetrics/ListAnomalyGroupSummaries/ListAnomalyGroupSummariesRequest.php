<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyGroupSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property int<0, 100> $SensitivityThreshold
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListAnomalyGroupSummariesRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn: string,
     *     SensitivityThreshold: int<0, 100>,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
