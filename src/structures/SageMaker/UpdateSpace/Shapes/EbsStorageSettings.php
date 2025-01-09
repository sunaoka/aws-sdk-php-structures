<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<5, 16384> $EbsVolumeSizeInGb
 */
class EbsStorageSettings extends Shape
{
    /**
     * @param array{EbsVolumeSizeInGb: int<5, 16384>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
