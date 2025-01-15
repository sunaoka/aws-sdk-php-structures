<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetSyncJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $syncSource
 * @property string|null $workspaceId
 */
class GetSyncJobRequest extends Request
{
    /**
     * @param array{
     *     syncSource: string,
     *     workspaceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
