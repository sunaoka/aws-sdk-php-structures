<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkInsightsAccessScopeAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkInsightsAccessScopeAnalysisId
 * @property bool|null $DryRun
 */
class DeleteNetworkInsightsAccessScopeAnalysisRequest extends Request
{
    /**
     * @param array{
     *     NetworkInsightsAccessScopeAnalysisId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
