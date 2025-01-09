<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CpuCredits
 */
class CreditSpecification extends Shape
{
    /**
     * @param array{CpuCredits?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
