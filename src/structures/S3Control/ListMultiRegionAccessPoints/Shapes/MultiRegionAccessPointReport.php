<?php

namespace Sunaoka\Aws\Structures\S3Control\ListMultiRegionAccessPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Alias
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property PublicAccessBlockConfiguration|null $PublicAccessBlock
 * @property 'READY'|'INCONSISTENT_ACROSS_REGIONS'|'CREATING'|'PARTIALLY_CREATED'|'PARTIALLY_DELETED'|'DELETING'|null $Status
 * @property list<RegionReport>|null $Regions
 */
class MultiRegionAccessPointReport extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Alias?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     PublicAccessBlock?: PublicAccessBlockConfiguration|null,
     *     Status?: 'READY'|'INCONSISTENT_ACROSS_REGIONS'|'CREATING'|'PARTIALLY_CREATED'|'PARTIALLY_DELETED'|'DELETING'|null,
     *     Regions?: list<RegionReport>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
