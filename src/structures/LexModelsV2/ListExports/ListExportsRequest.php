<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListExports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property Shapes\ExportSortBy|null $sortBy
 * @property list<Shapes\ExportFilter>|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $localeId
 */
class ListExportsRequest extends Request
{
    /**
     * @param array{
     *     botId?: string|null,
     *     botVersion?: string|null,
     *     sortBy?: Shapes\ExportSortBy|null,
     *     filters?: list<Shapes\ExportFilter>|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     localeId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
