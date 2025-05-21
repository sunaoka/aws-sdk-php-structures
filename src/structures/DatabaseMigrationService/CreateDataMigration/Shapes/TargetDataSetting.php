<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateDataMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'do-nothing'|'truncate'|'drop-tables-on-target'|null $TablePreparationMode
 */
class TargetDataSetting extends Shape
{
    /**
     * @param array{TablePreparationMode?: 'do-nothing'|'truncate'|'drop-tables-on-target'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
