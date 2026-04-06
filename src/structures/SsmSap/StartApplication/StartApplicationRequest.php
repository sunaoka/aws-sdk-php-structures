<?php

namespace Sunaoka\Aws\Structures\SsmSap\StartApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 */
class StartApplicationRequest extends Request
{
    /**
     * @param array{ApplicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
