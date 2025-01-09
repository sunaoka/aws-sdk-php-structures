<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property string $name
 */
class GetSchemaRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
