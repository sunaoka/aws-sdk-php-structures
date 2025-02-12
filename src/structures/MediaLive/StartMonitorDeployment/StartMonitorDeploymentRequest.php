<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartMonitorDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $Identifier
 * @property string|null $RequestId
 */
class StartMonitorDeploymentRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Identifier: string,
     *     RequestId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
