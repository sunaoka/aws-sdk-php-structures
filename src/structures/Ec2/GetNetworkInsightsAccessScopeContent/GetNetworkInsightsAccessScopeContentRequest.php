<?php

namespace Sunaoka\Aws\Structures\Ec2\GetNetworkInsightsAccessScopeContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkInsightsAccessScopeId
 * @property bool $DryRun
 */
class GetNetworkInsightsAccessScopeContentRequest extends Request
{
    /**
     * @param array{
     *     NetworkInsightsAccessScopeId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
