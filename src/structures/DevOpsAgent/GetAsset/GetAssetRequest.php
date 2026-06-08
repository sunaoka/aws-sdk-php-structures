<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $assetId
 * @property int<1, max>|null $assetVersion
 */
class GetAssetRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     assetId: string,
     *     assetVersion?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
