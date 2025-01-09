<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkInsightsAccessScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $NetworkInsightsAccessScopeId
 */
class DeleteNetworkInsightsAccessScopeRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     NetworkInsightsAccessScopeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
