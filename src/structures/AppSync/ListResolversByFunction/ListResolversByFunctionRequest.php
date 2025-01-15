<?php

namespace Sunaoka\Aws\Structures\AppSync\ListResolversByFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $functionId
 * @property string|null $nextToken
 * @property int<0, 25>|null $maxResults
 */
class ListResolversByFunctionRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     functionId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 25>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
