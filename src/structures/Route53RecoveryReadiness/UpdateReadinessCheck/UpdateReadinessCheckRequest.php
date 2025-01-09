<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\UpdateReadinessCheck;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReadinessCheckName
 * @property string $ResourceSetName
 */
class UpdateReadinessCheckRequest extends Request
{
    /**
     * @param array{
     *     ReadinessCheckName: string,
     *     ResourceSetName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
