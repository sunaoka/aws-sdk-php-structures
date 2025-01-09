<?php

namespace Sunaoka\Aws\Structures\S3Control\ListMultiRegionAccessPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Alias
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property PublicAccessBlockConfiguration $PublicAccessBlock
 * @property 'READY'|'INCONSISTENT_ACROSS_REGIONS'|'CREATING'|'PARTIALLY_CREATED'|'PARTIALLY_DELETED'|'DELETING' $Status
 * @property list<RegionReport> $Regions
 */
class MultiRegionAccessPointReport extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Alias?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     PublicAccessBlock?: PublicAccessBlockConfiguration,
     *     Status?: 'READY'|'INCONSISTENT_ACROSS_REGIONS'|'CREATING'|'PARTIALLY_CREATED'|'PARTIALLY_DELETED'|'DELETING',
     *     Regions?: list<RegionReport>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
