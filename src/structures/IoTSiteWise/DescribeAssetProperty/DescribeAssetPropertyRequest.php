<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetProperty;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property string $propertyId
 */
class DescribeAssetPropertyRequest extends Request
{
    /**
     * @param array{
     *     assetId: string,
     *     propertyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
