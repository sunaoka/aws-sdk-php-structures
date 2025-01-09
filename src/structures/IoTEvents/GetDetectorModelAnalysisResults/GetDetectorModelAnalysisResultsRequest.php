<?php

namespace Sunaoka\Aws\Structures\IoTEvents\GetDetectorModelAnalysisResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analysisId
 * @property string $nextToken
 * @property int $maxResults
 */
class GetDetectorModelAnalysisResultsRequest extends Request
{
    /**
     * @param array{
     *     analysisId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
