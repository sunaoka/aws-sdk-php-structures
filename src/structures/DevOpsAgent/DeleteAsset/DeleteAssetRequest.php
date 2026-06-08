<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\DeleteAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $assetId
 */
class DeleteAssetRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     assetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
