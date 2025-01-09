<?php

namespace Sunaoka\Aws\Structures\AppRunner\DeleteObservabilityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ObservabilityConfigurationArn
 */
class DeleteObservabilityConfigurationRequest extends Request
{
    /**
     * @param array{ObservabilityConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
