<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchAssociateProjectAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetId
 * @property 'INTERNAL_FAILURE' $code
 * @property string $message
 */
class AssetErrorDetails extends Shape
{
    /**
     * @param array{
     *     assetId: string,
     *     code: 'INTERNAL_FAILURE',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
