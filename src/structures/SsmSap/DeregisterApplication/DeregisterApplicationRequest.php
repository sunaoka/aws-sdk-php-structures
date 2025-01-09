<?php

namespace Sunaoka\Aws\Structures\SsmSap\DeregisterApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 */
class DeregisterApplicationRequest extends Request
{
    /**
     * @param array{ApplicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
