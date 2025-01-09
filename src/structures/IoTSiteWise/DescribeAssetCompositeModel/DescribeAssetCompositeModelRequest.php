<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetCompositeModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property string $assetCompositeModelId
 */
class DescribeAssetCompositeModelRequest extends Request
{
    /**
     * @param array{
     *     assetId: string,
     *     assetCompositeModelId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
