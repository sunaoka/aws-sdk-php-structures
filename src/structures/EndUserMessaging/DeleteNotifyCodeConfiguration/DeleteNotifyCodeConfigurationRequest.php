<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\DeleteNotifyCodeConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $notifyCodeConfigurationId
 */
class DeleteNotifyCodeConfigurationRequest extends Request
{
    /**
     * @param array{notifyCodeConfigurationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
