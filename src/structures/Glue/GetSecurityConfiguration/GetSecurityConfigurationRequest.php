<?php

namespace Sunaoka\Aws\Structures\Glue\GetSecurityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetSecurityConfigurationRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
