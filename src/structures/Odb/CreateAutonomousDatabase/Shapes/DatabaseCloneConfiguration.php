<?php

namespace Sunaoka\Aws\Structures\Odb\CreateAutonomousDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceAutonomousDatabaseId
 * @property 'FULL'|'METADATA'|'PARTIAL' $cloneType
 */
class DatabaseCloneConfiguration extends Shape
{
    /**
     * @param array{
     *     sourceAutonomousDatabaseId: string,
     *     cloneType: 'FULL'|'METADATA'|'PARTIAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
