<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteResourceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceConfigurationIdentifier
 */
class DeleteResourceConfigurationRequest extends Request
{
    /**
     * @param array{resourceConfigurationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
