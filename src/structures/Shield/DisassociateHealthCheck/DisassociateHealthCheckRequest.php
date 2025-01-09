<?php

namespace Sunaoka\Aws\Structures\Shield\DisassociateHealthCheck;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProtectionId
 * @property string $HealthCheckArn
 */
class DisassociateHealthCheckRequest extends Request
{
    /**
     * @param array{
     *     ProtectionId: string,
     *     HealthCheckArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
