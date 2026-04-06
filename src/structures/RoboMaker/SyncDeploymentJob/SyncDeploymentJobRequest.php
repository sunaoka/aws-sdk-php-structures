<?php

namespace Sunaoka\Aws\Structures\RoboMaker\SyncDeploymentJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientRequestToken
 * @property string $fleet
 */
class SyncDeploymentJobRequest extends Request
{
    /**
     * @param array{
     *     clientRequestToken: string,
     *     fleet: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
