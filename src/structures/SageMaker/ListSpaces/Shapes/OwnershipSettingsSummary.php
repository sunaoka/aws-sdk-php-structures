<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListSpaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerUserProfileName
 */
class OwnershipSettingsSummary extends Shape
{
    /**
     * @param array{OwnerUserProfileName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
