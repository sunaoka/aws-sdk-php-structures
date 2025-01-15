<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteFargateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $namespace
 * @property array<string, string>|null $labels
 */
class FargateProfileSelector extends Shape
{
    /**
     * @param array{
     *     namespace?: string|null,
     *     labels?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
