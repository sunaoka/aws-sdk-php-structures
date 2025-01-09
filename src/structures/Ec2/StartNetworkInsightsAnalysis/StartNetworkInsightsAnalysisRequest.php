<?php

namespace Sunaoka\Aws\Structures\Ec2\StartNetworkInsightsAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkInsightsPathId
 * @property list<string> $AdditionalAccounts
 * @property list<string> $FilterInArns
 * @property bool $DryRun
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $ClientToken
 */
class StartNetworkInsightsAnalysisRequest extends Request
{
    /**
     * @param array{
     *     NetworkInsightsPathId: string,
     *     AdditionalAccounts?: list<string>,
     *     FilterInArns?: list<string>,
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
