<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartDeleteMonitorDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class StartDeleteMonitorDeploymentRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
