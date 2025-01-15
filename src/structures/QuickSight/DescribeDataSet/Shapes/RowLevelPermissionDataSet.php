<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Namespace
 * @property string $Arn
 * @property 'GRANT_ACCESS'|'DENY_ACCESS' $PermissionPolicy
 * @property 'VERSION_1'|'VERSION_2'|null $FormatVersion
 * @property 'ENABLED'|'DISABLED'|null $Status
 */
class RowLevelPermissionDataSet extends Shape
{
    /**
     * @param array{
     *     Namespace?: string|null,
     *     Arn: string,
     *     PermissionPolicy: 'GRANT_ACCESS'|'DENY_ACCESS',
     *     FormatVersion?: 'VERSION_1'|'VERSION_2'|null,
     *     Status?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
