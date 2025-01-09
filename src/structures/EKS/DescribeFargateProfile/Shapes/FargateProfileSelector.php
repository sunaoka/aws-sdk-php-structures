<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeFargateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $namespace
 * @property array<string, string> $labels
 */
class FargateProfileSelector extends Shape
{
    /**
     * @param array{
     *     namespace?: string,
     *     labels?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
