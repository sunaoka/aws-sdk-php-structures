<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListDocuments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property list<string> $dataSourceIds
 * @property string $nextToken
 * @property int $maxResults
 */
class ListDocumentsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     indexId: string,
     *     dataSourceIds?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
