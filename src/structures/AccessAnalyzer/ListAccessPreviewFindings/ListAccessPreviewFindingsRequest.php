<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListAccessPreviewFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accessPreviewId
 * @property string $analyzerArn
 * @property array<string, Shapes\Criterion> $filter
 * @property string $nextToken
 * @property int $maxResults
 */
class ListAccessPreviewFindingsRequest extends Request
{
    /**
     * @param array{
     *     accessPreviewId: string,
     *     analyzerArn: string,
     *     filter?: array<string, Shapes\Criterion>,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
