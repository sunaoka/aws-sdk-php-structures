<?php

namespace Sunaoka\Aws\Structures\Ec2\StartNetworkInsightsAccessScopeAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkInsightsAccessScopeId
 * @property bool $DryRun
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $ClientToken
 */
class StartNetworkInsightsAccessScopeAnalysisRequest extends Request
{
    /**
     * @param array{
     *     NetworkInsightsAccessScopeId: string,
     *     DryRun?: bool,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
