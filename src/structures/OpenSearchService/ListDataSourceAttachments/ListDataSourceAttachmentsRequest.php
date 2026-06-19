<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDataSourceAttachments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListDataSourceAttachmentsRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
