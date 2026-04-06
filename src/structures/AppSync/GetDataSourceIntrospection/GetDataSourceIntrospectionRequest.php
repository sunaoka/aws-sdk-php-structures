<?php

namespace Sunaoka\Aws\Structures\AppSync\GetDataSourceIntrospection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $introspectionId
 * @property bool|null $includeModelsSDL
 * @property string|null $nextToken
 * @property int<0, 25>|null $maxResults
 */
class GetDataSourceIntrospectionRequest extends Request
{
    /**
     * @param array{
     *     introspectionId: string,
     *     includeModelsSDL?: bool|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 25>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
