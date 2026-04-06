<?php

namespace Sunaoka\Aws\Structures\AppRunner\DeleteAutoScalingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingConfigurationArn
 */
class DeleteAutoScalingConfigurationRequest extends Request
{
    /**
     * @param array{AutoScalingConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
