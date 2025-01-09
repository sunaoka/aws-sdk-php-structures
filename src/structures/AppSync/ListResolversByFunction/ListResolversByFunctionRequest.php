<?php

namespace Sunaoka\Aws\Structures\AppSync\ListResolversByFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $functionId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListResolversByFunctionRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     functionId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
