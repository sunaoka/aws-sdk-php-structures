<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\GetApplicationSessionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 */
class GetApplicationSessionConfigurationRequest extends Request
{
    /**
     * @param array{ApplicationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
