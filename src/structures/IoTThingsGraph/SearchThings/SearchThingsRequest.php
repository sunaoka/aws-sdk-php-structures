<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchThings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $entityId
 * @property string $nextToken
 * @property int $maxResults
 * @property int $namespaceVersion
 */
class SearchThingsRequest extends Request
{
    /**
     * @param array{
     *     entityId: string,
     *     nextToken?: string,
     *     maxResults?: int,
     *     namespaceVersion?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
