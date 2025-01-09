<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 */
class GetApplicationRequest extends Request
{
    /**
     * @param array{applicationName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
