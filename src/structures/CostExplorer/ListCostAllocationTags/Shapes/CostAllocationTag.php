<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCostAllocationTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TagKey
 * @property 'AWSGenerated'|'UserDefined' $Type
 * @property 'Active'|'Inactive' $Status
 * @property string $LastUpdatedDate
 * @property string $LastUsedDate
 */
class CostAllocationTag extends Shape
{
    /**
     * @param array{
     *     TagKey: string,
     *     Type: 'AWSGenerated'|'UserDefined',
     *     Status: 'Active'|'Inactive',
     *     LastUpdatedDate?: string,
     *     LastUsedDate?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
