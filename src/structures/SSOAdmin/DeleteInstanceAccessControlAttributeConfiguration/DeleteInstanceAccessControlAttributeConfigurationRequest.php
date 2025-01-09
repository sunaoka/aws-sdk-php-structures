<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DeleteInstanceAccessControlAttributeConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 */
class DeleteInstanceAccessControlAttributeConfigurationRequest extends Request
{
    /**
     * @param array{InstanceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
