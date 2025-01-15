<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property bool|null $excludeProperties
 */
class DescribeAssetRequest extends Request
{
    /**
     * @param array{
     *     assetId: string,
     *     excludeProperties?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
