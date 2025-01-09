<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\ListReadinessChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReadinessCheckArn
 * @property string $ReadinessCheckName
 * @property string $ResourceSet
 * @property array<string, string> $Tags
 */
class ReadinessCheckOutput extends Shape
{
    /**
     * @param array{
     *     ReadinessCheckArn: string,
     *     ReadinessCheckName?: string,
     *     ResourceSet: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
