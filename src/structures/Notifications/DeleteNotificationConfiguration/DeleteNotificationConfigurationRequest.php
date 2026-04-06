<?php

namespace Sunaoka\Aws\Structures\Notifications\DeleteNotificationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteNotificationConfigurationRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
