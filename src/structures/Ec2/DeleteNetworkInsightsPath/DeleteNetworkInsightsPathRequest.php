<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkInsightsPath;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $NetworkInsightsPathId
 */
class DeleteNetworkInsightsPathRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     NetworkInsightsPathId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
