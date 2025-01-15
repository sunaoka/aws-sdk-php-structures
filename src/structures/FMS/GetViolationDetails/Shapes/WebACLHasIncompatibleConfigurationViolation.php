<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WebACLArn
 * @property string|null $Description
 */
class WebACLHasIncompatibleConfigurationViolation extends Shape
{
    /**
     * @param array{
     *     WebACLArn?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
