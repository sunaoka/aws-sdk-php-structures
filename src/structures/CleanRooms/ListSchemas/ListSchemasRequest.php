<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListSchemas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property 'TABLE'|'ID_MAPPING_TABLE' $schemaType
 * @property string $nextToken
 * @property int $maxResults
 */
class ListSchemasRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     schemaType?: 'TABLE'|'ID_MAPPING_TABLE',
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
