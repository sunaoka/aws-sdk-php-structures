<?php

namespace Sunaoka\Aws\Structures\Ecs\RunTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SHARED'|'ISOLATED_SANDBOX'|'CONFIDENTIAL_SANDBOX' $isolationMode
 * @property 'CONFIGURED'|null $attestationPolicyStatus
 */
class TrustedExecutionSummary extends Shape
{
    /**
     * @param array{
     *     isolationMode: 'SHARED'|'ISOLATED_SANDBOX'|'CONFIDENTIAL_SANDBOX',
     *     attestationPolicyStatus?: 'CONFIGURED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
