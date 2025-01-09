<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\DeleteSyncJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $syncSource
 */
class DeleteSyncJobRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     syncSource: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
