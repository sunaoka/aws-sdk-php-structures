<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssociatedAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED' $state
 * @property ErrorDetails $error
 */
class AssetStatus extends Shape
{
    /**
     * @param array{
     *     state: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED',
     *     error?: ErrorDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
