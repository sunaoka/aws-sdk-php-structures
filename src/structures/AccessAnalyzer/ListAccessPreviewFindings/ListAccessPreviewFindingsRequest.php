<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListAccessPreviewFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accessPreviewId
 * @property string $analyzerArn
 * @property array<string, Shapes\Criterion>|null $filter
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListAccessPreviewFindingsRequest extends Request
{
    /**
     * @param array{
     *     accessPreviewId: string,
     *     analyzerArn: string,
     *     filter?: array<string, Shapes\Criterion>|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
