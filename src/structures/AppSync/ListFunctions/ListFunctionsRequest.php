<?php

namespace Sunaoka\Aws\Structures\AppSync\ListFunctions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListFunctionsRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
