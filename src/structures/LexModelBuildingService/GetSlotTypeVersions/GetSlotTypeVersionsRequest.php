<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetSlotTypeVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class GetSlotTypeVersionsRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
