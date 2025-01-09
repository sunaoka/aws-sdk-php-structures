<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseName
 * @property int $MemoryDuration
 * @property int $MagneticDuration
 * @property bool $CdcInsertsAndUpdates
 * @property bool $EnableMagneticStoreWrites
 */
class TimestreamSettings extends Shape
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     MemoryDuration: int,
     *     MagneticDuration: int,
     *     CdcInsertsAndUpdates?: bool,
     *     EnableMagneticStoreWrites?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
