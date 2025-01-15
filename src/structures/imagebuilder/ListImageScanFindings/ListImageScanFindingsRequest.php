<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ImageScanFindingsFilter>|null $filters
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 */
class ListImageScanFindingsRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\ImageScanFindingsFilter>|null,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
