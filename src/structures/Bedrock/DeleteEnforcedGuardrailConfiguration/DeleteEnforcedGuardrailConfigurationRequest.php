<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteEnforcedGuardrailConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configId
 */
class DeleteEnforcedGuardrailConfigurationRequest extends Request
{
    /**
     * @param array{configId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
