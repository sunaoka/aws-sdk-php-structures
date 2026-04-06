<?php

namespace Sunaoka\Aws\Structures\mgn\ListImportFileEnrichments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListImportFileEnrichmentsFilters|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListImportFileEnrichmentsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\ListImportFileEnrichmentsFilters|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
