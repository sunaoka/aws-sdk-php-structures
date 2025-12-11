<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetId
 * @property Permissions $permissions
 */
class AssetPermission extends Shape
{
    /**
     * @param array{
     *     assetId: string,
     *     permissions: Permissions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
