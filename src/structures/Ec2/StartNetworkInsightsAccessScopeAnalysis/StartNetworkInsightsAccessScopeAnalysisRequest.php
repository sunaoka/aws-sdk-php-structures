<?php

namespace Sunaoka\Aws\Structures\Ec2\StartNetworkInsightsAccessScopeAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkInsightsAccessScopeId
 * @property bool|null $DryRun
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string $ClientToken
 */
class StartNetworkInsightsAccessScopeAnalysisRequest extends Request
{
    /**
     * @param array{
     *     NetworkInsightsAccessScopeId: string,
     *     DryRun?: bool|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
