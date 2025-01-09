<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\DeleteReadinessCheck;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReadinessCheckName
 */
class DeleteReadinessCheckRequest extends Request
{
    /**
     * @param array{ReadinessCheckName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
