<?php

namespace Sunaoka\Aws\Structures\AppSync\GetDataSourceIntrospection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $introspectionId
 * @property bool $includeModelsSDL
 * @property string $nextToken
 * @property int $maxResults
 */
class GetDataSourceIntrospectionRequest extends Request
{
    /**
     * @param array{
     *     introspectionId: string,
     *     includeModelsSDL?: bool,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
