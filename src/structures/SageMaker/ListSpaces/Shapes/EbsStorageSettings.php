<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListSpaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $EbsVolumeSizeInGb
 */
class EbsStorageSettings extends Shape
{
    /**
     * @param array{EbsVolumeSizeInGb: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
