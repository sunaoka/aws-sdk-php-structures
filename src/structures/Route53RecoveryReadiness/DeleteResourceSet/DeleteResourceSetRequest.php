<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\DeleteResourceSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceSetName
 */
class DeleteResourceSetRequest extends Request
{
    /**
     * @param array{ResourceSetName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
