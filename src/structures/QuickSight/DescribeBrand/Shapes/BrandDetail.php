<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BrandId
 * @property string|null $Arn
 * @property 'CREATE_IN_PROGRESS'|'CREATE_SUCCEEDED'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|null $BrandStatus
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $VersionId
 * @property 'CREATE_IN_PROGRESS'|'CREATE_SUCCEEDED'|'CREATE_FAILED'|null $VersionStatus
 * @property list<string>|null $Errors
 * @property Logo|null $Logo
 */
class BrandDetail extends Shape
{
    /**
     * @param array{
     *     BrandId: string,
     *     Arn?: string|null,
     *     BrandStatus?: 'CREATE_IN_PROGRESS'|'CREATE_SUCCEEDED'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     VersionId?: string|null,
     *     VersionStatus?: 'CREATE_IN_PROGRESS'|'CREATE_SUCCEEDED'|'CREATE_FAILED'|null,
     *     Errors?: list<string>|null,
     *     Logo?: Logo|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
