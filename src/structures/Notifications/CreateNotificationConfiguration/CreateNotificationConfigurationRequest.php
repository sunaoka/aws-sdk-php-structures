<?php

namespace Sunaoka\Aws\Structures\Notifications\CreateNotificationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property 'LONG'|'SHORT'|'NONE'|null $aggregationDuration
 * @property array<string, string>|null $tags
 */
class CreateNotificationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description: string,
     *     aggregationDuration?: 'LONG'|'SHORT'|'NONE'|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
