<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListVodSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string $SourceLocationName
 */
class ListVodSourcesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     SourceLocationName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
