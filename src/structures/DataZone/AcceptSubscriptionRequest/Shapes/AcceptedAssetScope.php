<?php

namespace Sunaoka\Aws\Structures\DataZone\AcceptSubscriptionRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetId
 * @property list<string> $filterIds
 */
class AcceptedAssetScope extends Shape
{
    /**
     * @param array{
     *     assetId: string,
     *     filterIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
