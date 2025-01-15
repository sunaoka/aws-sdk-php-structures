<?php

namespace Sunaoka\Aws\Structures\DataZone\ListAssetFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $description
 * @property string $domainId
 * @property list<string>|null $effectiveColumnNames
 * @property string|null $effectiveRowFilter
 * @property string|null $errorMessage
 * @property string $id
 * @property string $name
 * @property 'VALID'|'INVALID'|null $status
 */
class AssetFilterSummary extends Shape
{
    /**
     * @param array{
     *     assetId: string,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     domainId: string,
     *     effectiveColumnNames?: list<string>|null,
     *     effectiveRowFilter?: string|null,
     *     errorMessage?: string|null,
     *     id: string,
     *     name: string,
     *     status?: 'VALID'|'INVALID'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
