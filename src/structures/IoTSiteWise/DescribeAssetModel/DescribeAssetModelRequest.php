<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property bool $excludeProperties
 * @property string $assetModelVersion
 */
class DescribeAssetModelRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     excludeProperties?: bool,
     *     assetModelVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
