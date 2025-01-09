<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateSyncJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $syncSource
 * @property string $syncRole
 * @property array<string, string> $tags
 */
class CreateSyncJobRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     syncSource: string,
     *     syncRole: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
