<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListSpaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerUserProfileName
 */
class OwnershipSettingsSummary extends Shape
{
    /**
     * @param array{OwnerUserProfileName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
