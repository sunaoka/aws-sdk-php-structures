<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\DeleteAssetFile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $assetId
 * @property string $path
 */
class DeleteAssetFileRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     assetId: string,
     *     path: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
