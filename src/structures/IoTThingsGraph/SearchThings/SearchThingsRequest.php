<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchThings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $entityId
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property int|null $namespaceVersion
 */
class SearchThingsRequest extends Request
{
    /**
     * @param array{
     *     entityId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     namespaceVersion?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
