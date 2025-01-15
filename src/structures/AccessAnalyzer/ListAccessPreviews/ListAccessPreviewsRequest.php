<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListAccessPreviews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerArn
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListAccessPreviewsRequest extends Request
{
    /**
     * @param array{
     *     analyzerArn: string,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
