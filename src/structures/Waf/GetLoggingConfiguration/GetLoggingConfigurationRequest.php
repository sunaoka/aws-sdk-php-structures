<?php

namespace Sunaoka\Aws\Structures\Waf\GetLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class GetLoggingConfigurationRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
