<?php

namespace Sunaoka\Aws\Structures\Notifications\GetManagedNotificationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetManagedNotificationConfigurationRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
