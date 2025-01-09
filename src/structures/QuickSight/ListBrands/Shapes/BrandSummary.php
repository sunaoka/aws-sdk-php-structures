<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListBrands\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $BrandId
 * @property string $BrandName
 * @property string $Description
 * @property 'CREATE_IN_PROGRESS'|'CREATE_SUCCEEDED'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $BrandStatus
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 */
class BrandSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     BrandId?: string,
     *     BrandName?: string,
     *     Description?: string,
     *     BrandStatus?: 'CREATE_IN_PROGRESS'|'CREATE_SUCCEEDED'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED',
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
