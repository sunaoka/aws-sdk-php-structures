<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetStageDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DeploymentId
 * @property string $GameName
 * @property string $StageName
 */
class GetStageDeploymentRequest extends Request
{
    /**
     * @param array{
     *     DeploymentId?: string|null,
     *     GameName: string,
     *     StageName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
