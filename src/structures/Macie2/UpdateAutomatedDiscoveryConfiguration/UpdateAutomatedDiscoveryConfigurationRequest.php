<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateAutomatedDiscoveryConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ENABLED'|'DISABLED' $status
 */
class UpdateAutomatedDiscoveryConfigurationRequest extends Request
{
    /**
     * @param array{status: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
