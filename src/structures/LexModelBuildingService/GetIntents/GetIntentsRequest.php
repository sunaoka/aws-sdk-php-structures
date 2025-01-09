<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetIntents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 * @property string $nameContains
 */
class GetIntentsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int,
     *     nameContains?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
