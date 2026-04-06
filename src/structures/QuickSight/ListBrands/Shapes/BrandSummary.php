<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListBrands\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $BrandId
 * @property string|null $BrandName
 * @property string|null $Description
 * @property 'CREATE_IN_PROGRESS'|'CREATE_SUCCEEDED'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|null $BrandStatus
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 */
class BrandSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     BrandId?: string|null,
     *     BrandName?: string|null,
     *     Description?: string|null,
     *     BrandStatus?: 'CREATE_IN_PROGRESS'|'CREATE_SUCCEEDED'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
