<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $name
 * @property string|null $ownerContact
 * @property Shapes\EventConfig $eventConfig
 */
class UpdateApiRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     name: string,
     *     ownerContact?: string|null,
     *     eventConfig: Shapes\EventConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
