<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableMagneticStoreWrites
 * @property MagneticStoreRejectedDataLocation|null $MagneticStoreRejectedDataLocation
 */
class MagneticStoreWriteProperties extends Shape
{
    /**
     * @param array{
     *     EnableMagneticStoreWrites: bool,
     *     MagneticStoreRejectedDataLocation?: MagneticStoreRejectedDataLocation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
