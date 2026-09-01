<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AppId
 * @property string|null $Arn
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property 'PRIVATE'|'PUBLIC'|null $Visibility
 */
class AppSummary extends Shape
{
    /**
     * @param array{
     *     AppId?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     Visibility?: 'PRIVATE'|'PUBLIC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
