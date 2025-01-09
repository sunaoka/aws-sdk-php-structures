<?php

namespace Sunaoka\Aws\Structures\Notifications\CreateNotificationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property 'LONG'|'SHORT'|'NONE' $aggregationDuration
 * @property array<string, string> $tags
 */
class CreateNotificationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description: string,
     *     aggregationDuration?: 'LONG'|'SHORT'|'NONE',
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
