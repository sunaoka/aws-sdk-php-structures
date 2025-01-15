<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\ListReadinessChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReadinessCheckArn
 * @property string|null $ReadinessCheckName
 * @property string $ResourceSet
 * @property array<string, string>|null $Tags
 */
class ReadinessCheckOutput extends Shape
{
    /**
     * @param array{
     *     ReadinessCheckArn: string,
     *     ReadinessCheckName?: string|null,
     *     ResourceSet: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
