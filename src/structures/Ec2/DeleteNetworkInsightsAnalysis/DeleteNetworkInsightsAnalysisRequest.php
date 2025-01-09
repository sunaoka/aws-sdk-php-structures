<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkInsightsAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $NetworkInsightsAnalysisId
 */
class DeleteNetworkInsightsAnalysisRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     NetworkInsightsAnalysisId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
