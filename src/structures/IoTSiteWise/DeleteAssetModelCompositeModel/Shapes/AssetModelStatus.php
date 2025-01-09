<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteAssetModelCompositeModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'PROPAGATING'|'DELETING'|'FAILED' $state
 * @property ErrorDetails $error
 */
class AssetModelStatus extends Shape
{
    /**
     * @param array{
     *     state: 'CREATING'|'ACTIVE'|'UPDATING'|'PROPAGATING'|'DELETING'|'FAILED',
     *     error?: ErrorDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
