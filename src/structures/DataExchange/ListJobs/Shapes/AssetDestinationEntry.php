<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssetId
 * @property string $Bucket
 * @property string|null $Key
 */
class AssetDestinationEntry extends Shape
{
    /**
     * @param array{
     *     AssetId: string,
     *     Bucket: string,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
