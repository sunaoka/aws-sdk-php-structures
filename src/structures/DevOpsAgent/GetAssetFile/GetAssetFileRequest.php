<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAssetFile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $assetId
 * @property string $path
 * @property int<1, max>|null $assetVersion
 */
class GetAssetFileRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     assetId: string,
     *     path: string,
     *     assetVersion?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
