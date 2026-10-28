<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ami
 * @property string|null $accountId
 * @property 'AWS'|'AZURE'|null $cloudProvider
 * @property string|null $cloudPartition
 * @property string|null $cloudRegion
 * @property string|null $cloudOrgId
 * @property string|null $cloudAccountId
 * @property SeverityCounts|null $severityCounts
 * @property int|null $affectedInstances
 * @property 'INSTANCE_SCAN'|'MACHINE_IMAGE_SCAN'|null $scanSource
 */
class AmiAggregationResponse extends Shape
{
    /**
     * @param array{
     *     ami: string,
     *     accountId?: string|null,
     *     cloudProvider?: 'AWS'|'AZURE'|null,
     *     cloudPartition?: string|null,
     *     cloudRegion?: string|null,
     *     cloudOrgId?: string|null,
     *     cloudAccountId?: string|null,
     *     severityCounts?: SeverityCounts|null,
     *     affectedInstances?: int|null,
     *     scanSource?: 'INSTANCE_SCAN'|'MACHINE_IMAGE_SCAN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
