<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property bool|null $excludeProperties
 * @property string|null $assetModelVersion
 */
class DescribeAssetModelRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     excludeProperties?: bool|null,
     *     assetModelVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
