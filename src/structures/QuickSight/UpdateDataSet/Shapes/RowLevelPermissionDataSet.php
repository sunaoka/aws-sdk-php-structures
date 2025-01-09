<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Namespace
 * @property string $Arn
 * @property 'GRANT_ACCESS'|'DENY_ACCESS' $PermissionPolicy
 * @property 'VERSION_1'|'VERSION_2' $FormatVersion
 * @property 'ENABLED'|'DISABLED' $Status
 */
class RowLevelPermissionDataSet extends Shape
{
    /**
     * @param array{
     *     Namespace?: string,
     *     Arn: string,
     *     PermissionPolicy: 'GRANT_ACCESS'|'DENY_ACCESS',
     *     FormatVersion?: 'VERSION_1'|'VERSION_2',
     *     Status?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
