<?php

namespace Sunaoka\Aws\Structures\AppSync\ListTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property 'SDL'|'JSON' $format
 * @property string $nextToken
 * @property int $maxResults
 */
class ListTypesRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     format: 'SDL'|'JSON',
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
