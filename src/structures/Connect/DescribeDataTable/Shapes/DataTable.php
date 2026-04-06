<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeDataTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Id
 * @property string $Arn
 * @property string $TimeZone
 * @property string|null $Description
 * @property 'NONE'|'DATA_TABLE'|'PRIMARY_VALUE'|'ATTRIBUTE'|'VALUE'|null $ValueLockLevel
 * @property DataTableLockVersion|null $LockVersion
 * @property string|null $Version
 * @property string|null $VersionDescription
 * @property 'PUBLISHED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string|null $LastModifiedRegion
 * @property array<string, string>|null $Tags
 */
class DataTable extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Id: string,
     *     Arn: string,
     *     TimeZone: string,
     *     Description?: string|null,
     *     ValueLockLevel?: 'NONE'|'DATA_TABLE'|'PRIMARY_VALUE'|'ATTRIBUTE'|'VALUE'|null,
     *     LockVersion?: DataTableLockVersion|null,
     *     Version?: string|null,
     *     VersionDescription?: string|null,
     *     Status?: 'PUBLISHED'|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     LastModifiedRegion?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
