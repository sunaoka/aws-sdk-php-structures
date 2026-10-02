<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\GetNotifyCodeConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $notifyCodeConfigurationId
 */
class GetNotifyCodeConfigurationRequest extends Request
{
    /**
     * @param array{notifyCodeConfigurationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
