<?php

namespace Sunaoka\Aws\Structures\AppRegistry\DeleteApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $application
 */
class DeleteApplicationRequest extends Request
{
    /**
     * @param array{application: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
