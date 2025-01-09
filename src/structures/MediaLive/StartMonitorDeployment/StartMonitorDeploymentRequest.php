<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartMonitorDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $Identifier
 */
class StartMonitorDeploymentRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
