<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\CreateAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $assetType
 * @property Shapes\Document|null $metadata
 * @property Shapes\AssetContent $content
 * @property string|null $clientToken
 */
class CreateAssetRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     assetType: string,
     *     metadata?: Shapes\Document|null,
     *     content: Shapes\AssetContent,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
