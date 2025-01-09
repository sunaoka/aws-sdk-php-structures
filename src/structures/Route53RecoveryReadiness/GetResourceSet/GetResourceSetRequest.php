<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetResourceSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceSetName
 */
class GetResourceSetRequest extends Request
{
    /**
     * @param array{ResourceSetName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
