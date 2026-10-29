<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetStorageInfo\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StorageMetrics|null $SPOG
 * @property StorageMetrics|null $POGS
 * @property StorageMetrics|null $GPSO
 * @property StorageMetrics|null $OSGP
 * @property StorageMetrics|null $PZSOG
 */
class QuadsInfo extends Shape
{
    /**
     * @param array{
     *     SPOG?: StorageMetrics|null,
     *     POGS?: StorageMetrics|null,
     *     GPSO?: StorageMetrics|null,
     *     OSGP?: StorageMetrics|null,
     *     PZSOG?: StorageMetrics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
