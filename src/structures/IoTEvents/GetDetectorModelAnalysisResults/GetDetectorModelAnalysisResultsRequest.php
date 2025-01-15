<?php

namespace Sunaoka\Aws\Structures\IoTEvents\GetDetectorModelAnalysisResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analysisId
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class GetDetectorModelAnalysisResultsRequest extends Request
{
    /**
     * @param array{
     *     analysisId: string,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
