<?php

namespace Sunaoka\Aws\Structures\Ec2\StartNetworkInsightsAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkInsightsPathId
 * @property list<string>|null $AdditionalAccounts
 * @property list<string>|null $FilterInArns
 * @property bool|null $DryRun
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string $ClientToken
 */
class StartNetworkInsightsAnalysisRequest extends Request
{
    /**
     * @param array{
     *     NetworkInsightsPathId: string,
     *     AdditionalAccounts?: list<string>|null,
     *     FilterInArns?: list<string>|null,
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
