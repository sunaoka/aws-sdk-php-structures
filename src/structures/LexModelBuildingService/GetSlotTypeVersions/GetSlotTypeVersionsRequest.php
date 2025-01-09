<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetSlotTypeVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $nextToken
 * @property int<1, 50> $maxResults
 */
class GetSlotTypeVersionsRequest extends Request
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
