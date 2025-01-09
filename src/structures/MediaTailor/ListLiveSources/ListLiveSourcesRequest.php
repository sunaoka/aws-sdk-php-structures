<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListLiveSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property string $SourceLocationName
 */
class ListLiveSourcesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     SourceLocationName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
