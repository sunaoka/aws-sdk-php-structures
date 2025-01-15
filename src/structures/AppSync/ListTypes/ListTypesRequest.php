<?php

namespace Sunaoka\Aws\Structures\AppSync\ListTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property 'SDL'|'JSON' $format
 * @property string|null $nextToken
 * @property int<0, 25>|null $maxResults
 */
class ListTypesRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     format: 'SDL'|'JSON',
     *     nextToken?: string|null,
     *     maxResults?: int<0, 25>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
