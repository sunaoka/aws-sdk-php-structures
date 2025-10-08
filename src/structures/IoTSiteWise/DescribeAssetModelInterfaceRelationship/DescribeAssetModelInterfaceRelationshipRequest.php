<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModelInterfaceRelationship;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property string $interfaceAssetModelId
 */
class DescribeAssetModelInterfaceRelationshipRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     interfaceAssetModelId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
