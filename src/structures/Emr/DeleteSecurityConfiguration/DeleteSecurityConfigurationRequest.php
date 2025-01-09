<?php

namespace Sunaoka\Aws\Structures\Emr\DeleteSecurityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteSecurityConfigurationRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
