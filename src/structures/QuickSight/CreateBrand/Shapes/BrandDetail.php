<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateBrand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BrandId
 * @property string $Arn
 * @property 'CREATE_IN_PROGRESS'|'CREATE_SUCCEEDED'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $BrandStatus
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $VersionId
 * @property 'CREATE_IN_PROGRESS'|'CREATE_SUCCEEDED'|'CREATE_FAILED' $VersionStatus
 * @property list<string> $Errors
 * @property Logo $Logo
 */
class BrandDetail extends Shape
{
    /**
     * @param array{
     *     BrandId: string,
     *     Arn?: string,
     *     BrandStatus?: 'CREATE_IN_PROGRESS'|'CREATE_SUCCEEDED'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED',
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     VersionId?: string,
     *     VersionStatus?: 'CREATE_IN_PROGRESS'|'CREATE_SUCCEEDED'|'CREATE_FAILED',
     *     Errors?: list<string>,
     *     Logo?: Logo
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
