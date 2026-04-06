<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\PutAssetModelInterfaceRelationship\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'PROPAGATING'|'DELETING'|'FAILED' $state
 * @property ErrorDetails|null $error
 */
class AssetModelStatus extends Shape
{
    /**
     * @param array{
     *     state: 'CREATING'|'ACTIVE'|'UPDATING'|'PROPAGATING'|'DELETING'|'FAILED',
     *     error?: ErrorDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
