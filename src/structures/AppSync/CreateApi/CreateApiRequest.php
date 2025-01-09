<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $ownerContact
 * @property array<string, string> $tags
 * @property Shapes\EventConfig $eventConfig
 */
class CreateApiRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     ownerContact?: string,
     *     tags?: array<string, string>,
     *     eventConfig?: Shapes\EventConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
