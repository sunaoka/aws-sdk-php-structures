<?php

namespace Sunaoka\Aws\Structures\DataZone\ListAssetFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property string $domainId
 * @property list<string> $effectiveColumnNames
 * @property string $effectiveRowFilter
 * @property string $errorMessage
 * @property string $id
 * @property string $name
 * @property 'VALID'|'INVALID' $status
 */
class AssetFilterSummary extends Shape
{
    /**
     * @param array{
     *     assetId: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     domainId: string,
     *     effectiveColumnNames?: list<string>,
     *     effectiveRowFilter?: string,
     *     errorMessage?: string,
     *     id: string,
     *     name: string,
     *     status?: 'VALID'|'INVALID'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
