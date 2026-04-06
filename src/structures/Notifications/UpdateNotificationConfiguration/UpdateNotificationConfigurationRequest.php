<?php

namespace Sunaoka\Aws\Structures\Notifications\UpdateNotificationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $name
 * @property string|null $description
 * @property 'LONG'|'SHORT'|'NONE'|null $aggregationDuration
 */
class UpdateNotificationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     description?: string|null,
     *     aggregationDuration?: 'LONG'|'SHORT'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
