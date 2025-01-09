<?php

namespace Sunaoka\Aws\Structures\DataZone\GetSubscriptionGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetId
 * @property string $errorMessage
 * @property list<string> $filterIds
 * @property string $status
 */
class AssetScope extends Shape
{
    /**
     * @param array{
     *     assetId: string,
     *     errorMessage?: string,
     *     filterIds: list<string>,
     *     status: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
