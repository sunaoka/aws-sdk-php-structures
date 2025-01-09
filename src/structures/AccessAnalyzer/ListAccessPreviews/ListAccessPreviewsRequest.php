<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListAccessPreviews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerArn
 * @property string $nextToken
 * @property int $maxResults
 */
class ListAccessPreviewsRequest extends Request
{
    /**
     * @param array{
     *     analyzerArn: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
