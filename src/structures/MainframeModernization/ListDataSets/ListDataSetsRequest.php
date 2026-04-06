<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListDataSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property int<1, 2000>|null $maxResults
 * @property string|null $nameFilter
 * @property string|null $nextToken
 * @property string|null $prefix
 */
class ListDataSetsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     maxResults?: int<1, 2000>|null,
     *     nameFilter?: string|null,
     *     nextToken?: string|null,
     *     prefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
