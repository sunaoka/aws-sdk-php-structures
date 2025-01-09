<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetResourceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceConfigurationIdentifier
 */
class GetResourceConfigurationRequest extends Request
{
    /**
     * @param array{resourceConfigurationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
