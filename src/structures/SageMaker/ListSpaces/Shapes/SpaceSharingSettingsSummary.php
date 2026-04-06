<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListSpaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Private'|'Shared'|null $SharingType
 */
class SpaceSharingSettingsSummary extends Shape
{
    /**
     * @param array{SharingType?: 'Private'|'Shared'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
