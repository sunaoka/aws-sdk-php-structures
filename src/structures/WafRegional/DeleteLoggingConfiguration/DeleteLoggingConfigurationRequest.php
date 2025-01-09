<?php

namespace Sunaoka\Aws\Structures\WafRegional\DeleteLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class DeleteLoggingConfigurationRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
