<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssetId
 * @property string $Bucket
 * @property string $Key
 */
class AssetDestinationEntry extends Shape
{
    /**
     * @param array{
     *     AssetId: string,
     *     Bucket: string,
     *     Key?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
