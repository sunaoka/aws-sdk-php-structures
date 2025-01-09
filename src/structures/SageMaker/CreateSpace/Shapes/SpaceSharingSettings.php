<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Private'|'Shared' $SharingType
 */
class SpaceSharingSettings extends Shape
{
    /**
     * @param array{SharingType: 'Private'|'Shared'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
