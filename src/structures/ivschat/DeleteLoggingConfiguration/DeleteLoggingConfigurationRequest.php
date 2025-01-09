<?php

namespace Sunaoka\Aws\Structures\ivschat\DeleteLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class DeleteLoggingConfigurationRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
