<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ImageScanFindingsFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class ListImageScanFindingsRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\ImageScanFindingsFilter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
