<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $assetId
 * @property Shapes\Document|null $metadata
 * @property Shapes\AssetContent|null $content
 * @property string|null $clientToken
 */
class UpdateAssetRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     assetId: string,
     *     metadata?: Shapes\Document|null,
     *     content?: Shapes\AssetContent|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
