<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property bool|null $excludeProperties
 */
class DescribeAssetModelRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     excludeProperties?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
