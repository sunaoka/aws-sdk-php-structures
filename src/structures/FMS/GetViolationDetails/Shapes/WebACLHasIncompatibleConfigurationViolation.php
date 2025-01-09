<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WebACLArn
 * @property string $Description
 */
class WebACLHasIncompatibleConfigurationViolation extends Shape
{
    /**
     * @param array{
     *     WebACLArn?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
