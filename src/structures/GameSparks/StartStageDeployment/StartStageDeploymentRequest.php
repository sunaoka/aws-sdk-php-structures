<?php

namespace Sunaoka\Aws\Structures\GameSparks\StartStageDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $GameName
 * @property string $SnapshotId
 * @property string $StageName
 */
class StartStageDeploymentRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     GameName: string,
     *     SnapshotId: string,
     *     StageName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
