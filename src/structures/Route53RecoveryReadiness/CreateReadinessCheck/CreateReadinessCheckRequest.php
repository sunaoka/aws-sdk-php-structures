<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\CreateReadinessCheck;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReadinessCheckName
 * @property string $ResourceSetName
 * @property array<string, string>|null $Tags
 */
class CreateReadinessCheckRequest extends Request
{
    /**
     * @param array{
     *     ReadinessCheckName: string,
     *     ResourceSetName: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
