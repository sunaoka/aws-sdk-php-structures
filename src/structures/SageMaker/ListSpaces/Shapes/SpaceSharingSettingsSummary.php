<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListSpaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Private'|'Shared' $SharingType
 */
class SpaceSharingSettingsSummary extends Shape
{
    /**
     * @param array{SharingType?: 'Private'|'Shared'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
