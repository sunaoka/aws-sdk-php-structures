<?php

namespace Sunaoka\Aws\Structures\Glue\SearchAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $AssetName
 * @property string|null $AssetDescription
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $AssetTypeId
 */
class SearchResultItem extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     AssetName?: string|null,
     *     AssetDescription?: string|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     AssetTypeId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
