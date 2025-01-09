<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListDataSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property int<1, 2000> $maxResults
 * @property string $nameFilter
 * @property string $nextToken
 * @property string $prefix
 */
class ListDataSetsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     maxResults?: int<1, 2000>,
     *     nameFilter?: string,
     *     nextToken?: string,
     *     prefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
