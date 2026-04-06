<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModelCompositeModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property string $assetModelCompositeModelId
 */
class DescribeAssetModelCompositeModelRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     assetModelCompositeModelId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
