<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchThings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $entityId
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 * @property int $namespaceVersion
 */
class SearchThingsRequest extends Request
{
    /**
     * @param array{
     *     entityId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 250>,
     *     namespaceVersion?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
