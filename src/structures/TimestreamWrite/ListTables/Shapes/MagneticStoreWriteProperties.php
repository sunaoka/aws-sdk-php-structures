<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\ListTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableMagneticStoreWrites
 * @property MagneticStoreRejectedDataLocation $MagneticStoreRejectedDataLocation
 */
class MagneticStoreWriteProperties extends Shape
{
    /**
     * @param array{
     *     EnableMagneticStoreWrites: bool,
     *     MagneticStoreRejectedDataLocation?: MagneticStoreRejectedDataLocation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
