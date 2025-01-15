<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListDocuments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property list<string>|null $dataSourceIds
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListDocumentsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     indexId: string,
     *     dataSourceIds?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
