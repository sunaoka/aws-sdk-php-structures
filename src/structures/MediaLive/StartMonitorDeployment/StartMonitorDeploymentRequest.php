<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartMonitorDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $Identifier
 */
class StartMonitorDeploymentRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
