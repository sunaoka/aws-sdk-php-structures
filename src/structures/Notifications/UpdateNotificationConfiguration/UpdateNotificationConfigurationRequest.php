<?php

namespace Sunaoka\Aws\Structures\Notifications\UpdateNotificationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property 'LONG'|'SHORT'|'NONE' $aggregationDuration
 */
class UpdateNotificationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string,
     *     description?: string,
     *     aggregationDuration?: 'LONG'|'SHORT'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
