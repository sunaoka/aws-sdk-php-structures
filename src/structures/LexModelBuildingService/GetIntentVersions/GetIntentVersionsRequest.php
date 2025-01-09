<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetIntentVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $nextToken
 * @property int<1, 50> $maxResults
 */
class GetIntentVersionsRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
