<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListSchemas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property 'TABLE'|'ID_MAPPING_TABLE'|null $schemaType
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListSchemasRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     schemaType?: 'TABLE'|'ID_MAPPING_TABLE'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
