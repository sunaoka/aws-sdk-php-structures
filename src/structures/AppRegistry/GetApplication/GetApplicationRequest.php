<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $application
 */
class GetApplicationRequest extends Request
{
    /**
     * @param array{application: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
