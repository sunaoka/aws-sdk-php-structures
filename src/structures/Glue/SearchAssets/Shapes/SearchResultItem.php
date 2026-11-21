<?php

namespace Sunaoka\Aws\Structures\Glue\SearchAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $AssetTypeId
 */
class SearchResultItem extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     AssetTypeId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
