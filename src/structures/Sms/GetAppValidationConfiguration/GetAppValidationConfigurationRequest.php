<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppValidationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 */
class GetAppValidationConfigurationRequest extends Request
{
    /**
     * @param array{appId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
