<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceIdentifier
 */
class DeleteServiceRequest extends Request
{
    /**
     * @param array{serviceIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
