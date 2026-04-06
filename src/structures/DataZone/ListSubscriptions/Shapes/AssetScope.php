<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetId
 * @property list<string> $filterIds
 * @property string $status
 * @property string|null $errorMessage
 */
class AssetScope extends Shape
{
    /**
     * @param array{
     *     assetId: string,
     *     filterIds: list<string>,
     *     status: string,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
