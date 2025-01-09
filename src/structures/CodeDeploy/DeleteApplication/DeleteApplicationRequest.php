<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\DeleteApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 */
class DeleteApplicationRequest extends Request
{
    /**
     * @param array{applicationName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
