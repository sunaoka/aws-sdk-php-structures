<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkInsightsPath;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $NetworkInsightsPathId
 */
class DeleteNetworkInsightsPathRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     NetworkInsightsPathId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
