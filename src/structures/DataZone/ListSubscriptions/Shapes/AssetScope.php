<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetId
 * @property string|null $errorMessage
 * @property list<string> $filterIds
 * @property string $status
 */
class AssetScope extends Shape
{
    /**
     * @param array{
     *     assetId: string,
     *     errorMessage?: string|null,
     *     filterIds: list<string>,
     *     status: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
