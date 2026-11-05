<?php

namespace Sunaoka\Aws\Structures\S3Tables\StartTableMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<64, 512>|null $targetFileSizeMB
 * @property 'auto'|'binpack'|'sort'|'z-order'|null $strategy
 */
class MigrationCompactionSettings extends Shape
{
    /**
     * @param array{
     *     targetFileSizeMB?: int<64, 512>|null,
     *     strategy?: 'auto'|'binpack'|'sort'|'z-order'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
