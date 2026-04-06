<?php

namespace Sunaoka\Aws\Structures\DataZone\ListAssetFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $domainId
 * @property string $assetId
 * @property string $name
 * @property string|null $description
 * @property 'VALID'|'INVALID'|null $status
 * @property list<string>|null $effectiveColumnNames
 * @property string|null $effectiveRowFilter
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $errorMessage
 */
class AssetFilterSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     domainId: string,
     *     assetId: string,
     *     name: string,
     *     description?: string|null,
     *     status?: 'VALID'|'INVALID'|null,
     *     effectiveColumnNames?: list<string>|null,
     *     effectiveRowFilter?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
