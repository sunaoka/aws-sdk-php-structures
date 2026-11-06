<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobUpgradeAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analysisId
 * @property string $jobName
 */
class GetJobUpgradeAnalysisRequest extends Request
{
    /**
     * @param array{
     *     analysisId: string,
     *     jobName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
