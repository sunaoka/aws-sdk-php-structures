<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateAccountConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AccountConfiguration $AccountConfiguration
 */
class UpdateAccountConfigurationRequest extends Request
{
    /**
     * @param array{AccountConfiguration?: Shapes\AccountConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
