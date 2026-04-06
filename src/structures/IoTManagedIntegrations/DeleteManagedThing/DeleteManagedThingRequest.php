<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\DeleteManagedThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property bool|null $Force
 */
class DeleteManagedThingRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     Force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
