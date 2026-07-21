<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DeleteSecurityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteSecurityConfigurationRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
