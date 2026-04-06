<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteDataMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'drop-tables-on-target'|'truncate'|'do-nothing'|null $TablePreparationMode
 */
class TargetDataSetting extends Shape
{
    /**
     * @param array{TablePreparationMode?: 'drop-tables-on-target'|'truncate'|'do-nothing'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
