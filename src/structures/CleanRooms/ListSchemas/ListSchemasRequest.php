<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListSchemas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property 'TABLE'|'ID_MAPPING_TABLE' $schemaType
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListSchemasRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     schemaType?: 'TABLE'|'ID_MAPPING_TABLE',
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
