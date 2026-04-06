<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\UpdateModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string|null $Prefix
 */
class ModelDiagnosticsS3OutputConfiguration extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     Prefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
