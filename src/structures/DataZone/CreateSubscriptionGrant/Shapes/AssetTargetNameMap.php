<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetId
 * @property string $targetName
 */
class AssetTargetNameMap extends Shape
{
    /**
     * @param array{
     *     assetId: string,
     *     targetName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
