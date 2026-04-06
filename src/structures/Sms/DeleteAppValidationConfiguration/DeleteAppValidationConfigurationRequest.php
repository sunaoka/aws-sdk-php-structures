<?php

namespace Sunaoka\Aws\Structures\Sms\DeleteAppValidationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 */
class DeleteAppValidationConfigurationRequest extends Request
{
    /**
     * @param array{appId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
