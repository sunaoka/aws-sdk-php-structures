<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceIdentifier
 */
class GetServiceRequest extends Request
{
    /**
     * @param array{serviceIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
