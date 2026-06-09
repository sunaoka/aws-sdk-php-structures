<?php

namespace Sunaoka\Aws\Structures\Odb\CreateAutonomousDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $autonomousDatabaseBackupId
 * @property 'FULL'|'METADATA'|'PARTIAL' $cloneType
 * @property list<int>|null $cloneTableSpaceList
 */
class RestoreFromBackupConfiguration extends Shape
{
    /**
     * @param array{
     *     autonomousDatabaseBackupId: string,
     *     cloneType: 'FULL'|'METADATA'|'PARTIAL',
     *     cloneTableSpaceList?: list<int>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
