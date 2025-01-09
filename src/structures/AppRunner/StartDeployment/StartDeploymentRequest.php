<?php

namespace Sunaoka\Aws\Structures\AppRunner\StartDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceArn
 */
class StartDeploymentRequest extends Request
{
    /**
     * @param array{ServiceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
