<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateAssetFile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $assetId
 * @property string $path
 * @property Shapes\AssetFileBody|null $content
 * @property Shapes\Document|null $metadata
 * @property string|null $clientToken
 */
class UpdateAssetFileRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     assetId: string,
     *     path: string,
     *     content?: Shapes\AssetFileBody|null,
     *     metadata?: Shapes\Document|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
