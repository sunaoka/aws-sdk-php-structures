<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetReadinessCheck;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReadinessCheckName
 */
class GetReadinessCheckRequest extends Request
{
    /**
     * @param array{ReadinessCheckName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
