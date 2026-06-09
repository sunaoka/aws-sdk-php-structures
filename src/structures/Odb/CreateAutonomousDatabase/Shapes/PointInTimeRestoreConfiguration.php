<?php

namespace Sunaoka\Aws\Structures\Odb\CreateAutonomousDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceAutonomousDatabaseId
 * @property 'FULL'|'METADATA'|'PARTIAL' $cloneType
 * @property \Aws\Api\DateTimeResult|null $timestamp
 * @property bool|null $useLatestAvailableBackupTimestamp
 * @property list<int>|null $cloneTableSpaceList
 */
class PointInTimeRestoreConfiguration extends Shape
{
    /**
     * @param array{
     *     sourceAutonomousDatabaseId: string,
     *     cloneType: 'FULL'|'METADATA'|'PARTIAL',
     *     timestamp?: \Aws\Api\DateTimeResult|null,
     *     useLatestAvailableBackupTimestamp?: bool|null,
     *     cloneTableSpaceList?: list<int>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
