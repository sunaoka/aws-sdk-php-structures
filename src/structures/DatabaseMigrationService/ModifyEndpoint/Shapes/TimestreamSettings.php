<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseName
 * @property int $MemoryDuration
 * @property int $MagneticDuration
 * @property bool|null $CdcInsertsAndUpdates
 * @property bool|null $EnableMagneticStoreWrites
 */
class TimestreamSettings extends Shape
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     MemoryDuration: int,
     *     MagneticDuration: int,
     *     CdcInsertsAndUpdates?: bool|null,
     *     EnableMagneticStoreWrites?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
