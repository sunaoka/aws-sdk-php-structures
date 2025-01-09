<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property bool $excludeProperties
 */
class DescribeAssetRequest extends Request
{
    /**
     * @param array{
     *     assetId: string,
     *     excludeProperties?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
