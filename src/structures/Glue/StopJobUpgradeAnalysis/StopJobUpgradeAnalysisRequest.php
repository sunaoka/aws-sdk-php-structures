<?php

namespace Sunaoka\Aws\Structures\Glue\StopJobUpgradeAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $analysisId
 */
class StopJobUpgradeAnalysisRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     analysisId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
