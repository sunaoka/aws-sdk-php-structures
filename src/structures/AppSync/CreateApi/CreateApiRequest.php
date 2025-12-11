<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $ownerContact
 * @property array<string, string>|null $tags
 * @property Shapes\EventConfig $eventConfig
 */
class CreateApiRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     ownerContact?: string|null,
     *     tags?: array<string, string>|null,
     *     eventConfig: Shapes\EventConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
