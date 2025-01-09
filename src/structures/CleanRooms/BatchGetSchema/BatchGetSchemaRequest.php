<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property list<string> $names
 */
class BatchGetSchemaRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     names: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
